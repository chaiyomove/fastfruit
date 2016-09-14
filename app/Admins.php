<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
     protected $fillable = [
        'idUser','idOrchard',
    ];

    protected $primaryKey = 'idAdmin';
}
