<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
	 protected $primaryKey = 'id';
     protected $fillable = [
        'notiType','seenStatus','idOtherUser','idUser','idOrchard','idNotiType','idProductSprint'
    ];
    protected $table = 'notifications';
    
    protected $dates = ['created_at'];

    public function orchard()
    {
    	return $this->belongsTo('App\Orchards','idOrchard');
    }

    public function user()
    {
    	return $this->belongsTo('App\Users','idUser');
    }

    public function otherUser()
    {
        return $this->belongsTo('App\Users','idOtherUser');
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
