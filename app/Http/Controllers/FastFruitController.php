<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use App\Product_sprints;
use App\Orchards;
use App\Orchard_plots;
use App\Fruits;
use App\Fruit_species;
use App\provinces;
use App\Matchings;
use Auth;
use DB;




class FastFruitController extends Controller
{
    public function orchards()
    {
        $orchards=Orchards::latest()->get();
        return view('orchard',compact('orchards'));
    }

    public function products()
    {
        $products=Product_sprints::latest()->get();
        return view('product',compact('products'));
    }

    public function getMatching()
    {
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $provinces = Provinces::all();
        

        // $matchings = DB::table('Matchings')->where('idUser',Auth::user()->id);

        if (Auth::check()){
            $matchings = Matchings::where('idUser',Auth::user()->id)->get();
            $orchards = Orchards::latest()->get();
            $matchedOrcs = array(); 
                   
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
                // echo $matching->idFruitSpecie;
                // echo "<br><hr>";
            }
            



            // 
            // 
            //dd($matchings->idFruitSpecie);
            return view('match', compact('fruits','fruitSpecies','provinces','matchings','matchedOrcs'));
        }
        
        // return dd($matchings);
        // return dd($fruits);
        // return view('match', compact('fruits','fruitSpecies','provinces'));
    }

    public function postMatching()
    {
        $input = Request::all();

        if (Auth::check()){
            $input['idUser'] = Auth::user()->id;
        } else {
            $input['idUser'] = 0;
        }

        unset($input['fruit']);
       

        if ( $input['unit']==2){
            $input['fruitNum']= $input['fruitNum']*1000;

        }


        Matchings::create($input);
        // dd($input);
        return redirect('matching');
    }

    public function deleteMatching()
    {
        $input = Request::all();
        
        // return dd($input['idMatching']);
        Matchings::destroy($input['idMatching']);
        return redirect(action('FastFruitController@getMatching'));
    }
    

    public function contactus()
    {
        return view('contact');
    }

    public function productDetail($id)
    {
        $product = Product_sprints::findOrFail($id);
        return view('productDetail',compact('product'));
    }

    public function productDetailTmp()
    {
        $idProductSprint = Request::get('idProductSprint');
        // return $idProductSprint;
        $product = Product_sprints::findOrFail($idProductSprint);
        return view('productDetail',compact('product'));
    }

    public function chat()
    {
        return view('chat');
    }

    public function orchardDetail($id)
    {
        return view('orchard');
    }

    public function orchardDetailTmp()
    {
        $idOrchard = Request::get('idOrchard');
        $orchard = Orchards::findOrFail($idOrchard);   
        return view('orchardDetail',compact('orchard'));
    }

    public function userProfile()
    {
        return view('FirstLogin');
    }

    // public function userProfile($id)
    // {
    //     return view('FristLogin');
    // }


    public function getAddOrchard()
    {
        return view('AddOrchard');
    }

    public function postAddOrchard()
    {
        $input = Request::all();
        unset($input['picture1']);
        unset($input['picture2']);
        unset($input['picture3']);
        unset($input['checkgap']);
        Orchards::create($input);
       // return dd($input);
        return redirect('userorchard');
    }



    public function checkGap()
    {
        return view('Next');
    }


    public function updateOrchard()
    {
        return view('EditOrchard');
    }

    public function updateUserprofile()
    {
        return view('EditProfile');
    }

    public function userOrchard()
    {
        return view('OrchardProfile');
    }

    public function userProduct()
    {
        return view('AfterLogin');
    }

    public function getUserAddProduct()
    {
        return view('AddFruit');
    }

    public function userMatching()
    {
        return view('Match2');
    }

    public function userAddadmin()
    {
        return view('AddAdmin');
    }

     public function userProductDetail()
    {
        return view('ShowProduct');
    }

    // public function userProductDetail($id)
    // {
    //     return view('ShowProduct');
    // }

    public function postUserAddProduct()
    {
        $input = Request::all();
        unset($input['picture1']);
        unset($input['picture2']);
        unset($input['picture3']);
        Product_sprints::create($input);
        $sprint=new Product_sprints;
        $sprint->fruitSpecie=$input['fruitSpecie'];
       // return dd($input);
        return redirect('userproduct');
    }

     public function dashboard()
    {
        return view('DashBoard');
    }

    public function search()
    {
        $search = Request::get('search');
        $orchards = Orchards::latest()->get();
        $fruitSpecies = fruit_species::all();
        $provinces = provinces::all();
        $matchedOrcs = array(); 

        foreach ($orchards as $key => $orchard) {
            if (str_contains($orchard->nameOrchard,$search)) {
                $matchedOrcs[] = $orchard;
            }
            if (str_contains($orchard->description,$search)) {
                $matchedOrcs[] = $orchard;
            }  
        }  

        foreach ($fruitSpecies as $key => $fruitSpecie) {
            if (str_contains($fruitSpecie->specieName,$search)) {
                $orchardPlots = $fruitSpecie->orchardPlots;
                foreach ($orchardPlots as $key => $orchardPlot) {
                    $matchedOrcs[] = $orchardPlot->orchard;
                }
                
            }   
        }

        foreach ($provinces as $key => $province) {
            if (str_contains($province->provinceName,$search)) {
                foreach ($province->orchards as $key => $orchard) {
                    $matchedOrcs[] = $orchard;
                }
            }               
        }

        $matchedOrcs = array_unique($matchedOrcs);
        $matchedOrcs = array_values($matchedOrcs);

        return view('search', compact('matchedOrcs'));
    }


}
