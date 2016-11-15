<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $table = 'admins';

    protected $primaryKey = 'idAdmin';

    protected $fillable = [
        'idUser','idOrchard',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Users','idUser');
    }

     public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchard');
    }
}
