<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot_status extends Model
{
    protected $table = "plot_status";    
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

     public function gapOrchards()
    {
        return $this->hasMany('App\GapOrchards','idPlotStatus');
    }
}
