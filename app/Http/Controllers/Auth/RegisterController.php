<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/registered';

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
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],

            'restaurant_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postalcode' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'phonenumber-rest' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10'],
            'chamber-of-commerce' => ['required', 'string', 'max:255'],
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
        return User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),

            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],

            'restaurant_name' => $data['restaurant_name'],
            'address' => $data['address'],
            'postalcode' => $data['postalcode'],
            'region' => $data['region'],
            'phonenumber-rest' => $data['phonenumber-rest'],
            'chamber-of-commerce' => $data['chamber-of-commerce'],

            'checkbox-1' => $data['checkbox-1'],
            'checkbox-2' => $data['checkbox-2'],
            'checkbox-3' => $data['checkbox-3'],
            'checkbox-4' => $data['checkbox-4'],
            'checkbox-5' => $data['checkbox-5'],
        ]);
    }
}