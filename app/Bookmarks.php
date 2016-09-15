<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
      protected $fillable = [
        'idUser','idProductSprint',
    ];

    protected $primaryKey = 'idBookmark';

     public function productSprint()
    {
    	return $this->belongsTo('App\Product_sprints','idProductSprint');
    }

      public function user()
    {
    	return $this->belongsTo('App\Users');
    }
}
