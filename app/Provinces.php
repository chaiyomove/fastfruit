<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
     protected $fillable = [
        'provinceName','provinceNameEng',
    ];

    protected $primaryKey = 'idProvince';
    
    public function users()
    {
    	return $this->hasMany('App\Users');
    }

    public function orchards()
    {
    	return $this->hasMany('App\Orchards','idProvince');
    }

    public function matchings()
    {
        return $this->hasMany('App\Matchings','idProvince');
    }
}
