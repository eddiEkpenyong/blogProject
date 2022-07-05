<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $data){

        $this->validate($data, [
            "email" => "required",
            "password" => "required",
        ]);

        $credentials =  collect($data)->only("email", "password");

        if(Auth::attempt([
            "email" => $credentials["email"],
            "password" => $credentials["password"],
        ])
        ){
            return redirect('/');
        }

        return redirect()->back();
    }

    public function register(Request $request){
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',
        ]);

        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'User Created and Logged-In');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
