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
        $latestProducts[] = Product_sprints::latest()->take(8)->get();
        $latestProducts = array_collapse($latestProducts);
        // $product = $latestProducts[1];
        return view('home',compact('latestProducts'));
    }
}
