<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social_users extends Model
{
    protected $table = 'social_users';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'user_id', 'provider_user_id', 'provider',
    ];

    public function user()
        {
            return $this->belongsTo(Users::class);
        }
}
