<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orchard_plots extends Model
{
    protected $fillable = [
        'plotNumber','description', 'area', 'geolocation','picture','address','salesVolume','idOrchard','idFruitSpecie','idPlotStatus',
    ];
     protected $primaryKey = 'idOrchardPlot';

      public function productSprints()
    {
    	return $this->hasMany('App\Product_sprints','idOrchardPlot');
    }

     public function plotStatus()
    {
    	return $this->belongsTo('App\Plot_status','idPlotStatus');
    }

      public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchards');
    }


      public function fruitSpecies()
    {
    	return $this->belongsTo('App\Fruit_species','idFruitSpecie');
    }
}

