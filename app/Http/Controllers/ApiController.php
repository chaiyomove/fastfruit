<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Request

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Input;

use App\Subcategory;

use App\Fruit_species;

use App\Users;

use App\Orchards;

use App\Product_sprints;

use App\Matchings;

use App\Provinces;

use App\Notifications;

use App\Http\Requests\MatchOrchardRequest;



class ApiController extends Controller
{
    /**
     * dependent dropdown for Fruits->FruitSpecies
     * @param  [type] $id [description]
     * @return json     $fruitSpecies
     */
    public function fruitSpecies($id)
    {
    	// return "alert";
	    $idFruit = Input::get('idFruit');
	    // echo "<script>alert("1231")</script>";
	   	$fruitSpecies = Fruit_species::where('idFruit', '=', $id)
    	                ->orderBy('specieName', 'asc')
    	                ->get();

    	return Response::json($fruitSpecies);
	
    }

    public function followOrchard($uid, $id)
    {
        $user = Users::findOrFail($uid);
        $orchard = Orchards::findOrFail($id);
        $user->orchardFollowing()->save($orchard);
        $noti = new Notifications;
        $noti->idUser = $orchard->users->first()->id;
        $noti->idOtherUser = $uid;
        $noti->idOrchard = $id;
        $noti->idNotiType = 2;

        $noti->save();

        return $noti;
    }

    public function UnFollowOrchard($uid, $id)
    {
        $user = Users::findOrFail($uid);
        $orchard = Orchards::findOrFail($id);
        $user->orchardFollowing()->detach($orchard->idOrchard);
        
        return;
    }

    public function followUser($uid, $id)
    {
        $user = Users::findOrFail($uid);
        $following = Users::findOrFail($id);
        $user->Followings()->save($following);
        $user->notiFollowings()->save($following);
        $noti = $following->notifications->reverse()->first();
        $noti->idNotiType = 1;
        $noti->save();
        return $noti;
    }

    public function UnFollowUser($uid, $id)
    {
        $user = Users::findOrFail($uid);
        $following = Users::findOrFail($id);
        $user->Followings()->detach($following->id);
        
        return;
    }

     public function Bookmark($uid, $id)
    {

        $user = Users::findOrFail($uid);
        $product = Product_sprints::findOrFail($id);
        $user->userBookmarks()->save($product);
        
        return;
    }

    public function UnBookmark($uid, $id)
    {
        $user = Users::findOrFail($uid);
        $product = Product_sprints::findOrFail($id);
        $user->userBookmarks()->detach($product->idProductSprint);
        
        return;
    }

    public function storeMatching(MatchOrchardRequest $request, $id)
    {
        $input = $request->all();

        //converse to kg.
        if ($input['unit']==2){
            $input['fruitNum']= $input['fruitNum']*1000;
        }   

        $input['idUser'] = $id;     

        if ($id > 0){
            unset($input['_token']);
        }     

        $matching = Matchings::create($input);

        $matching["fruitSpecie"] = Fruit_species::find($input['idFruitSpecie'])->specieName; 
        $matching["Province"] = trim(Provinces::find($input['idProvince'])->provinceName); 
        return $matching;
        
        // dd($input);
        // return redirect('matching');
    }

    public function destroyMatching()
    {
        $input = Input::all();
        Matchings::destroy($input['idMatching']);
      
    }

    public function showMatching($id)
    {        
        $matchedOrcs = collect(); 
        $orchards = Orchards::latest()->get();

        // $matchings = DB::table('Matchings')->where('idUser',Auth::user()->id);
        if (true){
            
            // $matchedOrcs = array(); 
            foreach ($matchings as $key => $matching) {
                foreach ($orchards as $key => $orchard) {
                   $orchardPlots = $orchard->orchardPlots; 
                   foreach ($orchardPlots as $key => $orchardPlot) {
                        if ($matching->idFruitSpecie == $orchardPlot->idFruitSpecie){
                            // array_push($matchedOrcs, $orchard->idOrchard);
                            $matchedOrcs[] = $orchard;
                            // foreach ($matchedOrcs as $key => $idOrchard) {
                            //     echo $idOrchard;
                            //     echo "<br><hr>";
                            // }
                        }
                    } 
                }
            } 
        }

        return $matchings;
    }
    
}
