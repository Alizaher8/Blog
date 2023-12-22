<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Admin;
use App\Traits\ImagesTrait;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\SendEmailToAdmin;
use Illuminate\Support\Facades\Notification;
use App\Events\UserRegister;
use  App\Traits\SendNotifyTrait;
use App\Models\PushSubscription;
use App\Jobs\NotifyJop;
use App\Models\Notify;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    use ImagesTrait,SendNotifyTrait;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public $sub;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PushSubscription $sub)
    {
        $this->sub= $sub;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data )
    {



        return Validator::make($data, [
            'username' => ['required', 'string', 'max:100'],
            'firstname' => ['required', 'string', 'max:100'],
            'lastname' => ['required', 'string', 'max:100'],
            'image' => ['required', 'image'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data )
    {
        if($data['image']!= null)
             {
                $imagePath=$this->saveImage($data['image'],'uploads/users');

             }
             else
             {
                $imagePath=null;
             }

             $user=User::create([
                'username' => $data['username'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'image' => $imagePath,

                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user_id=User::select('id')->where('email',$data['email'])->first();
            //dd($user_id->id);

            Notify::create([
                'content'=>'hi aloosh',
                'type'=>1,
                'user_id'=>$user_id->id,
                'post_id'=>null,
                'comment_id'=>null,
            ]);


            // NotifyJop::dispatchAfterResponse('dddddd');

            // $this->sendNotify('New User Registered',
            // $data['username'].' is Registered now check your inbox to improve his','https://www.google.com');

            event(new UserRegister($user));
            Log::info('UserRegister event data: ' . json_encode($user->username));

           Notification::send(Admin::all(),new SendEmailToAdmin($user));
        return $user;
    }
}
