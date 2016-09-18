<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_sprints;
// use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product_sprints::latest()->get();
        for ($i=0; $i<4; $i++) { 
            $latestProducts[] = $products[$i];
        }
        // return $latestProducts;
        return view('home',compact('latestProducts'));
    }
}
