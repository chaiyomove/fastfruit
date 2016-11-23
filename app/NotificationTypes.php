<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationTypes extends Model
{
     protected $primaryKey = 'id';
     protected $fillable = [
        'description'
    ];
    protected $table = 'NotificationTypes';

     public function notifications()
    {
    	return $this->hasMany('App\Notifications','idNotiType');
    }
}
