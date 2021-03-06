<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

use App\Follow_user;
use App\Social_users;

// use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

use Laravel\Scout\Searchable;

use Laravel\Socialite\Contracts\User as ProviderUser;

use App\Notifications\ResetPassword as ResetPasswordNotification;

use App\Notifications\ConfirmEmail as ConfirmEmailNotification;

class Users extends Authenticatable
{
	use Notifiable;
    // use AlgoliaEloquentTrait;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName','citizenId' , 'email', 'password','address','phone','userPicture','userType','idProvince',
    ];

    protected $primaryKey = 'id';

    public function searchableAs()
    {
        return 'users';
    }

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

    /**
     * registor and login for facebook OAuth
     * @param  ProviderUser $providerUser   Socialite
     * @return Users $user                  Eloquent
     */
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = Social_users::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $account = new Social_users([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $user = Users::whereEmail($providerUser->getEmail())->first();

            if (!$user) {
                $name = $providerUser->getName();

                $user = Users::create([
                    'email' => $providerUser->getEmail(),
                    'firstName' => substr($name, 0, strpos($name, " ")),
                    'lastName' => substr($name,strpos($name, " ")+1),
                    'userPicture' => $providerUser->getAvatar(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Send the email confeirmmation notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendEmailComfirmationNotification($token)
    {
        $this->notify(new ConfirmEmailNotification($token));
    }

    public function reviews()
    {
        return $this->hasMany('App\Reviews','idUser');
    }

    public function notifications()
    {
        return $this->hasMany('App\Notifications','idUser');
    }

    public function notiFollowings()
    {
        return $this->belongsToMany('App\Notifications', 'notifications', 'idOtherUser', 'idUser');        
    }

    public function notiorchardFollowing()
    {
        return $this->belongsToMany('App\Notifications', 'notifications','idUser','idOrchard');            
    }

}
