<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password_resets extends Model
{

    protected $fillable = [
        'email','token'
    ];
    protected $table = 'password_resets';

    
}
