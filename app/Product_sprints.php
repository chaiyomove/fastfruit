<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_sprints extends Model
{
   protected $fillable = [
        'description','fruitNum', 'picture', 'fruitSpecie','time','idOrchardPlot',
    ];
    protected $primaryKey = 'idProductSprint';

     public function orchardPlot()
    {
    	return $this->belongsTo('App\Orchard_plots','idOrchardPlot');
    }

    public function bookmarks()
    {
        return $this->hasMany('App\Bookmarks','idProductSprint');
    }

    public function scopeNew($query)
    {
        $query->latest()->take(10)->get();
    }
}
