<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $primaryKey = 'idReview';

    protected $fillable = [
        'name','email','idOrchard','review','approved','idUser'
    ];
    protected $table = 'reviews';

    public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchard');
    }

    public function user()
    {
    	return $this->belongsTo('App\Users','idUser');
    }

}
