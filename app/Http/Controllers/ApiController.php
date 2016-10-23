<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Input;

use App\Subcategory;

use App\Fruit_species;

use App\Users;

use App\Orchards;

use Illuminate\Support\Facades\Auth;



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
}
