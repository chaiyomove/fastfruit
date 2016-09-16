<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use App\Product_sprints;
use App\Orchards;
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
        $orchards=Orchards::all();
        return view('orchard',compact('orchards'));
    }

    public function products()
    {
        $products=Product_sprints::all();
        return view('product',compact('products'));
    }

    public function getMatching()
    {
        $fruits = Fruits::all();
        $fruitSpecies = Fruit_species::all();
        $provinces = Provinces::all();
        $months = ['1'=>'มกราคม','2'=>'กุมภาพันธ์','3'=>'มีนาคม','4'=>'เมษายน','5'=>'พฤษภาคม','6'=>'มิถุนายน','7'=>'กรกฎาคม','8'=>'สิงหาคม','9'=>'กันยายน','10'=>'ตุลาคม','11'=>'พฤศจิกายน','12'=>'ธันวาคม' ];
        $years = array();
        for ($i=0;$i<6;$i++){
            $years[$i]=Carbon::now()->year+$i;
        }

        // $matchings = DB::table('Matchings')->where('idUser',Auth::user()->id);

        if (Auth::check()){
            $matchings = Matchings::where('idUser',Auth::user()->id)->get();
            return view('match', compact('fruits','fruitSpecies','provinces','months','years','matchings'));
        }
        
        // return dd($matchings);
        // return dd($fruits);
        return view('match', compact('fruits','fruitSpecies','provinces','months','years'));
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
        return view('product');
    }

    public function chat()
    {
        return view('chat');
    }

    public function orchardDetail($id)
    {
        return view('orchard');
    }

    public function userProfile($id)
    {
        return view('FristLogin');
    }


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

     public function userProductDetail($id)
    {
        return view('ShowProduct');
    }
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
        $orchards = Orchards::all();
        // foreach ($orchards as $orchard) {
        //     echo $orchard->nameOrchard." ".$orchard->description;
        //     echo "<br><hr>";
        // }
        // return dd($orchards);
        return view('search', compact('orchards'));
    }


}
