<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product_sprints extends Model
{
    use Searchable;
    
    protected $fillable = [
        'description','fruitNum', 'picture1','picture2','picture3','picture4', 'fruitSpecie','time','idOrchardPlot','startDate','endDate',
    ];
    protected $primaryKey = 'idProductSprint';

    // protected $dates = ['created_at', 'updated_at', 'startData','endDate'];

    public function searchableAs()
    {
        return 'product_sprints';
    }

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
