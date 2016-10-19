<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orchards extends Model
{
    protected $fillable = [
        'nameOrchard','description', 'area', 'geolocation','picture1','picture2','picture3','address','phone','ownerId','idProvince'
    ];

    protected $primaryKey = 'idOrchard';

    public function province()
    {
    	return $this->belongsTo('App\Provinces','idProvince');
    }

    public function orchardPlots()
    {
    	return $this->hasMany('App\Orchard_plots','idOrchard');
    }

    public function followOrchards()
    {
        return $this->hasMany('App\Follow_orchard','idOrchard');
    }

    public function admins()
    {
        return $this->hasMany('App\Admins','idOrchard');
    }
}