@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="nav-link pr-5" style="color: white" href="/">Blogaweb</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-weight: 500">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">HOME</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="/blogs">BLOGS</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="/posts">POSTS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/gigs">GIGS</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="/chats">CHATS</a>
                </li>
            </ul>

            <form class="" method="" action="#">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="submit" class="input-group-text" style="outline: none"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                    <input type="search" class="form-control" name="search" placeholder="Search">
            </form>
    </nav>
@endsection

@section('firstDiv')
<div class="row">

    <div class="col-md-6" style="margin-top: 8rem">
        <div class="mb-0 h5 d-sm-block">Get Daily Updates From Bloggago</div>
        <div class="h1 mt-0 p-0" style="font-size: 4rem; color: #3f0a8a">BLOGAGGOO</div>
    </div>

    <div class="col-md-6">
        <img src= {{ asset('storage/images/deveops.svg') }} alt=""  class="img-fluid">
    </div>

</div>
<h6 class="mt-5" style="border-bottom:5px solid black"><span class="bg-primary px-2 pt-1 mb-0">TRENDING</span></h6>
@endsection
