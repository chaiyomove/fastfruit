<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
     protected $fillable = [
        'idUser','idOrchard',
    ];

    protected $primaryKey = 'idAdmin';

     public function user()
    {
    	return $this->belongsTo('App\Users','idUser');
    }

     public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchard');
    }
}
