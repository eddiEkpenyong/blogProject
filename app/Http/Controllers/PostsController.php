<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $formfields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            // 'img_path' => 'required',
            'badge' => 'required',
        ]);

        $formfields['user_id'] = auth()->user()->id;
        $formfields = Posts::create($formfields);
        return redirect('/');
    }


    public function show(Posts $posts)

    {
        return view('posts.show', ["posts" => $posts ]);
    }


    public function edit(Posts $posts)
    {
        return view("posts.edit", ["posts"=>$posts]);
    }


    public function update(Request $request, Posts $posts)
    {
        $posts->update($request->all());
        return redirect("/");

    }


    public function delete(Posts $posts)
    {
        $posts->delete();
        return redirect("/");
    }
}
