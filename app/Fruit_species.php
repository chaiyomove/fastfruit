<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit_species extends Model
{
     protected $fillable = [
        'specieName','idFruit',
    ];

    protected $primaryKey = 'idFruitSpecie';
}
