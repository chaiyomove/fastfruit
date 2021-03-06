<?php

namespace App\Http\Controllers\Auth;

use App\Users;
use App\Password_resets;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *  
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Users
     */
    protected function create(array $data)
    {
        $user = Users::create([
                    'firstName' => $data['firstName'],
                    'lastName' => $data['lastName'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'confirm' => 0,
                ]);
        $confirm = Password_resets::create([
                        'email' => $user->email,
                        'token' => str_random(64),
        ]);

        $user->sendEmailComfirmationNotification($confirm->token);

        return $user; 

    }

     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        session(['status' => 'สมัครสมาชิกสำเร็จ กรุณายืนยันอีเมลก่อนลงชื่อเข้าใช้']);

        return redirect(url('login'));
    }

    protected function emailComfirmation($token)
    {
        $confirm = Password_resets::whereToken($token)->orderBy('created_at', 'desc')->first();
        if ($confirm != NULL){
            $user = Users::whereEmail($confirm->email)->first();
            $confirm->delete();
            $user->confirm = "1";
            $user->save();
            auth()->login($user);
            
            return redirect('/');
        }

    }
}
