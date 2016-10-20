<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_user extends Model
{
	
	protected $table = "follow_user";    

    protected $fillable = [
        'idUser','idFollower',
    ];

    protected $primaryKey = 'idFollowUser';
}
