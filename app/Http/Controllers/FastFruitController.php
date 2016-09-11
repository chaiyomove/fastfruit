<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Product_sprints;
use App\Orchards;

class FastFruitController extends Controller
{
    public function orchards()
    {
        return view('orchard');
    }

    public function products()
    {
        return view('product');
    }

     public function matching()
    {
        return view('match');
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
    	$input=Request::all();
    	unset($input['picture1']);
    	unset($input['picture2']);
    	unset($input['picture3']);
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
    	$input=Request::all();
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


}
