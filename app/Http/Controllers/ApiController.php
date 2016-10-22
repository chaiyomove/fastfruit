<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Input;

use App\Subcategory;

use App\Fruit_species;

class ApiController extends Controller
{
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
}
