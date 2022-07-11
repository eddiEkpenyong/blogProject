@extends('layouts.app')
@section('content')
@include('includes.nav')

<div class="container mt-3">
    <form action="/posts/{{$posts->id}}/update" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
           <h4 class="font-weight-bold text-primary">Edit Post</h4>
        </div>
        <div class="form-group">
          <label for="title" class="mb-0">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$posts->title}}">
        </div>
        <div class="form-group">
          <label for="body" class="mb-0">Body</label>
         <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Enter text">{{$posts->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="tags" class="mb-0">Tags</label>
            <input type="text" class="form-control" id="title" name="badge" placeholder="crypto, defi" value="{{$posts->badge}}">
          </div>
          <div class="form-group">
            <input type="file" name="img_path" id="" >
          </div>
        <button type="submit" class="btn btn-primary">Post</button>
      </form>
</div>
@endsection

