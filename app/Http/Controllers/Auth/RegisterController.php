<?php

namespace App\Http\Controllers\Auth;

use Image;
use App\User;
use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/my_account';

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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|size:11|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'hoto' => 'nullable|mimes:jpeg,jpg,png|max:200',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $max_id = User::max('id');
      if ($data['hoto']) {
        $image = $data['hoto'];
        $photo_name = $data['email']. '.' .$image->getClientOriginalExtension();

        $photo_obj = new Photo;
        $photo_obj->name = $photo_name;
        $location = public_path('images/photos/'.$photo_name);
        $photo_obj->path = '/images/photos/'.$photo_name;
        Image::make($image)->resize(165, 165)->save($location);
        $photo_obj->user_id = $max_id + 1;
        $photo_obj->save();
      }

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
