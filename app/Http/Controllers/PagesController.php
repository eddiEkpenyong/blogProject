<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
}
