<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Input;

use App\Subcategory;

class ApiController extends Controller
{
    public function fruitDropdown()
    {
    	$idFruit = Input::get('idFruit');


	   	$fruitSpecies = Fruit_species::where('idFruit', '=', $idFruit)
    	                ->get();

    	return Response::json($fruitSpecies);
	
    }
}
