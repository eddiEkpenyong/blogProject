@extends('layouts.app')

@section('content')
@include('includes.nav')

<div class="container mt-3">
   @foreach ($post as $posts)
    <x-post :posts="$posts" />
   @endforeach
</div>
@endsection

