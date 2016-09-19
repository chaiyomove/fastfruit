<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable
{
	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email', 'password','address','phone','userPicture','userType','idProvince',
    ];

    protected $primaryKey = 'id';

    public function province()
    {
        return $this->belongsTo('App\Provinces','idProvince');
    }

    public function matchings()
    {
        return $this->hasMany('App\Matchings');
    }

     public function admins()
    {
        return $this->hasMany('App\Admins','idUser');
    }

     public function bookmarks()
    {
        return $this->hasMany('App\Bookmarks');
    }

    public function followUsers()
    {
        return $this->hasMany('App\Follow_user','idUserFollowing');
    }

    public function followBy()
    {
        return $this->hasMany('App\Follow_user','idUserFollower');
    }

    public function followOrchards()
    {
        return $this->hasMany('App\Follow_orchard');
    }

}
