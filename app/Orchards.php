<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orchards extends Model
{
    protected $fillable = [
        'nameOrchard','description', 'area', 'geolocation','picture','address','phone','ownerId','idProvince',
    ];
     protected $primaryKey = 'idOrchards';

      public function province()
    {
    	return $this->belongsTo('App\Provinces','idProvince');
    }

     public function orchardPlots()
    {
    	return $this->hasMany('App\Orchard_plots','idOrchards');
    }

    public function followOrchards()
    {
        return $this->hasMany('App\Follow_orchard','idOrchards');
    }

     public function admins()
    {
        return $this->hasMany('App\Admins','idOrchards');
    }
}