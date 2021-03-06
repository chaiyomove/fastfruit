<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruit_species extends Model
{
    protected $fillable = [
        'specieName','idFruit'
    ];

    protected $table = 'fruit_species';

    protected $primaryKey = 'idFruitSpecie';

    public function orchardPlots()
    {
    	return $this->hasMany('App\Orchard_plots','idFruitSpecie');
    }

    public function fruit()
    {
    	return $this->belongsTo('App\Fruits','idFruit');
    }

    public function matchings()
    {
        return $this->hasMany('App\Matchings','idFruitSpecie');
    }

    public function productSprints()
    {
        return $this->hasMany('App\Product_sprints','FruitSpecie');
    }

}
