<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index.dashboard');
    }

    public function home(){
        return view('pages.home');
    }

    public function blogs(){
        return view('pages.blog');
    }

    public function posts(){
        return view('pages.post');
    }

    public function gigs(){
        return view('pages.gig');
    }

    public function chats(){
        return view('pages.chat');
    }
    public function login(){
        return view('Auth.login');
    }
    public function register(){
        return view('Auth.register');
    }
}
