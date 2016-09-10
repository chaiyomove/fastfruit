<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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


    public function addOrchard()
    {
        return view('Addorchard');
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

    public function userAddProduct()
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


}
