<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
	 protected $primaryKey = 'id';
     protected $fillable = [
        'notiType','seenStatus','idUser','idOrchard','idNotiType','idProductSprint'
    ];
    protected $table = 'notifications';

    public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchard');
    }

    public function user()
    {
    	return $this->belongsTo('App\Users','idUser');
    }

    public function notificationTyes()
    {
    	return $this->belongsTo('App\NotificationTypes','idNotiType');
    }

    public function productSprint()
    {
    	return $this->belongsTo('App\Product_sprints','idProductSprint');
    }
}
