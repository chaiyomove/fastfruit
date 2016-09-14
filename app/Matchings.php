<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchings extends Model
{
    protected $fillable = [
        'fruitNum','distance', 'idPlotStatus', 'idProvince','idUser','idFruitSpecie',
    ];

    protected $primaryKey = 'idMatching';
}