<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruits extends Model
{
      protected $fillable = [
        'fruitName',
    ];

    protected $primaryKey = 'idFruit';

     public function fruitSpecies()
    {
    	return $this->hasMany('App\Fruit_species','idFruit');
    }
}
