<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

class Product_sprints extends Model
{
    use AlgoliaEloquentTrait;
    
    protected $fillable = [
        'description','fruitNum', 'picture1','picture2','picture3','picture4', 'fruitSpecie','time','idOrchardPlot','startDate','endDate',
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

    public function bookmarkUsers()
    {
        return $this->belongsToMany('App\Users', 'bookmarks','idProductSprint','idUser');            
    }


    public function fruitSpeciess()
    {
        return $this->belongsTo('App\Fruit_species','fruitSpecie');
    }

    public function scopeNew($query)
    {
        $query->latest()->take(10)->get();
    }


}
