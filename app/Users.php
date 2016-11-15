<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

use App\Follow_user;
use App\Social_users;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

use Laravel\Socialite\Contracts\User as ProviderUser;

class Users extends Authenticatable
{
	use Notifiable;
    use AlgoliaEloquentTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName','citizenId' , 'email', 'password','address','phone','userPicture','userType','idProvince',
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
    public function userBookmarks()
    {
        return $this->belongsToMany('App\Product_sprints', 'bookmarks','idUser','idProductSprint');            
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

    public function orchards()
    {
        return $this->belongsToMany('App\Orchards', 'admins' , 'idUser', 'idOrchard');
    }
    
    public function orchardFollowing()
    {
        return $this->belongsToMany('App\Orchards', 'follow_orchard','idUser','idOrchard');            
    }

    public function Followers()
    {
        return $this->belongsToMany('App\Users', 'follow_user', 'idUser', 'idFollower');
    }

    public function Followings()
    {
        return $this->belongsToMany('App\Users', 'follow_user', 'idFollower', 'idUser');        
    }

    public function createOrGetUser(Social_users $socialUser)
        {
            // $account = Social_users::whereProvider('facebook')
            //     ->whereProviderUserId($socialUser->getId())
            //     ->first();

            $account = $socialUser->getId();
            if ($account) {
                echo "existed";
                // return $account->user;
            } else {
                echo "not exist";
                // $account = new SocialAccount([
                //     'provider_user_id' => $socialUser->getId(),
                //     'provider' => 'facebook'
                // ]);

                // $user = Users::whereEmail($socialUser->getEmail())->first();

                // if (!$user) {

                //     $user = Users::create([
                //         'email' => $socialUser->getEmail(),
                //         'name' => $socialUser->getName(),
                //     ]);
                // }

                // $account->user()->associate($user);
                // $account->save();

                // return $user;

            }

        }

}
