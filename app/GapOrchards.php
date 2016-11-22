<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GapOrchards extends Model
{
  protected $primaryKey = 'idGapOrchard';

    protected $fillable = [
        'stardate','enddate','name','plotnumber','citizenid','fruitspecies','status','idPlotStatus'
    ];
    protected $table = 'gap_orchards';

    public function plotStatus()
    {
    	return $this->belongsTo('App\Plot_status','idPlotStatus');
    }

   
}
