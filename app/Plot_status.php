<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot_status extends Model
{
    protected $fillable = [
        'status',
    ];
    protected $primaryKey = 'idPlotStatus';
}
