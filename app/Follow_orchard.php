<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_orchard extends Model
{
     protected $fillable = [
        'idUser','idOrchard',
    ];

    protected $primaryKey = 'idFollowOrchard';
}
