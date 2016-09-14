<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orchard_plots extends Model
{
    protected $fillable = [
        'plotNumber','description', 'area', 'geolocation','picture','address','salesVolume','idOrchard','idFruitSpecie','idPlotStatus',
    ];
     protected $primaryKey = 'idOrchardPlot';
}
}
