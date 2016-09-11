<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orchards extends Model
{
    protected $fillable = [
        'nameOrchard','description', 'area', 'geolocation','picture','address','phone','ownerId','idProvince'
    ];
}