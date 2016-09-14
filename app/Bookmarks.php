<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
      protected $fillable = [
        'idUser','idProductSprint',
    ];

    protected $primaryKey = 'idBookmark';
}
