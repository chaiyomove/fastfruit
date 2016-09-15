<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow_user extends Model
{
      protected $fillable = [
        'idUserFollower','idUserFollowing',
    ];

    protected $primaryKey = 'idFollowUser';
}
