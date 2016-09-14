<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot_status extends Model
{
    protected $fillable = [
        'status'
    ];
    protected $primaryKey = 'idPlotStatus';

     public function orchardPlots()
    {
    	return $this->hasMany('App\Orchard_plots','idPlotStatus');
    }

    public function matchings()
    {
    	return $this->hasMany('App\Matchings','idPlotStatus');
    }
}
