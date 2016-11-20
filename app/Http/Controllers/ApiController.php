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
        
        return;
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
        
        return;
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
            $matching = Matchings::create($input);
        } else {
            $matching = new Matchings($input);
        }       

        $matching["fruitSpecie"] = Fruit_species::find($input['idFruitSpecie'])->specieName; 
        $matching["Province"] = trim(Provinces::find($input['idProvince'])->provinceName); 
        return $matching;
        
        // dd($input);
        // return redirect('matching');
    }

    public function deleteMatching()
    {
        $input = Input::all();
        // return $input[2];
        if ($input['idMatching'] > 0) {
            Matchings::destroy($input['idMatching']);
            return "database";
        }   
        // return dd($input['idMatching']);
        
        return "nondatabase";
    }
    
}
