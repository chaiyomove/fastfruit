<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
      protected $fillable = [
        'sentDate','readDate','content','idUserFrom','idUserTo',
    ];

    protected $primaryKey = 'idChat';
}
