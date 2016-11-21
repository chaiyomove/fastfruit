<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $primaryKey = 'idReview';

    protected $fillable = [
        'name','email','idOrchard','review','approved'
    ];
    protected $table = 'reviews';

    public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchard');
    }

}
