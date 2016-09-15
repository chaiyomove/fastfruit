<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_orchard extends Model
{
     protected $fillable = [
        'idUser','idOrchard',
    ];

    protected $primaryKey = 'idFollowOrchard';

       public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchards');
    }

      public function user()
    {
    	return $this->belongsTo('App\Users');
    }
}
