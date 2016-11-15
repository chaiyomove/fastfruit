<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use Socialite;

class SocialAuthController extends Controller
{
	/**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user(); 

        echo $user->getId();
        echo "<br/>";
        echo $user->getNickname();
        echo "<br/>";
        echo $user->getName();
        echo "<br/>";
        echo $user->getEmail();
        echo "<br/>";
        echo $user->getAvatar();
        echo "<br/>";

        // $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

        // auth()->login($user);

        // return redirect()->to('/home');

        // $user->token;
    }
}