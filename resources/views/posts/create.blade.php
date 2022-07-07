@extends('layouts.app')
@section('content')
@include('includes.nav')

<div class="container mt-3">
    <form action="" method="">
        @csrf
        <div class="form-group">
           <h4 class="font-weight-bold text-primary">Create Post</h4>
        </div>
        <div class="form-group">
          <label for="title" class="mb-0">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="body" class="mb-0">Body</label>
         <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Enter text"></textarea>
        </div>
        <div class="form-group">
            <label for="tags" class="mb-0">Tags</label>
            <input type="text" class="form-control" id="title" name="badge" placeholder="crypto, defi">
          </div>
          <div class="form-group">
            <input type="file" name="img_path" id="" >
          </div>
        <button type="submit" class="btn btn-primary">Post</button>
      </form>
</div>
@endsection

