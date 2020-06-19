<?php

namespace App\Http\Controllers;
use App\Register;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function showRegister(Request $request)
    {
        $register = $request->session()->get('register');

        return view('register',compact('register'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:registers',
            'password' => 'required|min:5',

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:registers',
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'name' => 'required',
            'address' => 'required',
            'postalcode' => 'required',
            'region' => 'required',
            'phonenumber-rest' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'chamber-of-commerce' => 'required'
        ]);

        $register = new Register([
            'username' => $request->get('username'),
            'password' => $request->get('password'),

            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'phonenumber' => $request->get('phonenumber'),

            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'postalcode' => $request->get('postalcode'),
            'region' => $request->get('region'),
            'phonenumber-rest' => $request->get('phonenumber-rest'),
            'chamber-of-commerce' => $request->get('chamber-of-commerce'),
        ]);

        $register->save();

        return redirect('/registered');
    }
}