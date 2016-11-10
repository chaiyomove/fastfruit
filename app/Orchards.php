<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

class Orchards extends Model
{
    use AlgoliaEloquentTrait;
    
    protected $primaryKey = 'idOrchard';

    protected $fillable = [
        'nameOrchard','description', 'area', 'geolocation','picture1','picture2','picture3','address','lat','lng','phone','ownerId','idProvince'
    ];

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

    public function users()
    {
        return $this->belongsToMany('App\Users', 'admins', 'idOrchard', 'idUser');
    }

    public function orchardFollowers()
    {
        return $this->belongsToMany('App\Users', 'follow_orchard','idOrchard','idUser');
    }

}