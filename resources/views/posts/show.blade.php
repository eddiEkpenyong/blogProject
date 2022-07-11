@extends('layouts.app')

@section('content')
@include('includes.nav')

<div class="container mt-3">
    <h4 class="mb-1">{{$posts->title}}</h4>
    <small class="text-muted">Posted: {{$posts->created_at->diffForHumans()}} by {{$posts->user->name}}</small>
    <div>
        <h5 class="mb-0">{{$posts->body}}</h5>
        <small class="text-muted font-italic"><x-post-tags :tagsCsv="$posts->badge"/></small>
        <br>
         <a href="/posts/{{$posts->id}}/edit" class="badge badge-dark text-white">Edit</a>
         <a href="/posts/{{$posts->id}}/delete" class="badge badge-danger btn-outline-none text-light">Delete</a>

    </div>

</div>

@endsection
