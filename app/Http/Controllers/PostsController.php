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
        // $posts = Posts::find($id);
        // dd($posts);
        return view('posts.show', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
