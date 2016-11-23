<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Matchings extends Model
{
    use Searchable;

    protected $fillable = [
        'fruitNum','distance','startDate','endDate', '_token', 'idPlotStatus', 'idProvince','idUser','idFruitSpecie',
    ];

    protected $primaryKey = 'idMatching';

    public function searchableAs()
    {
        return 'matchings';
    }

    public function fruitSpecie()
    {
    	return $this->belongsTo('App\Fruit_species','idFruitSpecie');
    }

    public function plotStatus()
    {
    	return $this->belongsTo('App\Plot_status','idPlotStatus');
    }

    public function province()
    {
    	return $this->belongsTo('App\Provinces','idProvince');
    }

    public function user()
    {
    	return $this->belongsTo('App\Users');
    }


}