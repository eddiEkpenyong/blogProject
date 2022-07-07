@extends('layouts.app')

@section('content')
    @include('includes.nav')

    <div class="container">
        <div class="row align-items-center pt-5">

            <p class="mb-0 mq-1 h5 text-bold">Get Daily Updates On CryptoCurrencies</p>
            <h2 class="mb-0 mq-2 font-weight-bolder" style="font-weight:500; color:#0e259b; font-size:40px">EDVIN CRYPTO->BLOG
            </h2>

        </div>

        <a href="/posts/create" class= "btn btn-md text-white mt-3 btn-danger" onclick="prompt('Make Your First Post? Need Guides')">Create Post</a>

        <h6 class="mt-4 pt-1" style="border-bottom:3px solid black"><span
                class="bg-danger px-2 pt-1 text-white">TRENDING</span>
        </h6>

        <div class="row g-4 mt-3">
            @if (count($post)>0)

            @foreach ($post as $posts)
            <div class="col-md-3 col-12">
                <div class="card border-0 h-100">
                    <img src={{ asset('storage/images/eth.svg') }} alt="" class="card-image-top">
                    <div class="card-body">
                        <p class="card-text text-center font-weight-bold">{{$posts->title}}</p>
                    </div>
                    <div class="card-footer border-top-0">
                        <span>Tags: <a href="#" class="badge badge-secondary">{{$posts->badge}}</a>
                    </div>
                </div>
            </div>
            @endforeach

            @else
                <p class="h4 font-weight-bold">No Posts</p>
            @endif
        </div>

        <div class="my-5">
            <div class="carousel slide w-100" id="slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src={{ asset('storage/images/eth.svg') }} alt="">
                        {{-- <div class="carousel-caption">
                    <p>Cryptocurrency News</p>
                </div> --}}
                    </div>
                    <div class="carousel-item">
                        <img src={{ asset('storage/images/eth.svg') }} alt="">
                    </div>
                    <div class="carousel-item">
                        <img src={{ asset('storage/images/eth.svg') }} alt="">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#slider" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slider" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <div class="my-5">
            <div class="row gy-2">
                <div class="col-md-4">
                    <span class="bg-info px-2 pt-1 mb-0 text-white">TRENDING</span>
                    <div class="border-bottom mb-2" style="border: 3px solid rgb(55, 150, 173)"></div>

                    <div class="card border-0 h-100">
                        <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                        <div class="card-body">
                            <p class="card-text text-justify font-weight-light">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Molestiae vitae veritatis alias facilis cupiditate esse quos odio assumenda quia
                                quibusdam.
                            </p>
                        </div>
                        <div class="card-footer border-top-0">
                            <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                            <a href="#" class="badge badge-secondary">Ethereum</a>
                            <a href="#" class="badge badge-secondary">Bitcoin</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <span class="bg-info px-2 pt-1 mb-0 text-white">Ethereum</span>
                    <div class="border-bottom mb-2" style="border: 3px solid rgb(55, 150, 173)"></div>
                    <div class="card border-0 h-100">
                        <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                        <div class="card-body">
                            <p class="card-text text-justify font-weight-light">Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Nobis laudantium illo dolorem ad. Ipsum, error?</p>
                        </div>
                        <div class="card-footer border-top-0">
                            <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                            <a href="#" class="badge badge-secondary">Ethereum</a>
                            <a href="#" class="badge badge-secondary">Bitcoin</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="bg-info px-2 pt-1 mb-0 text-white">TRENDING</span>
                    <div class="border-bottom mb-2" style="border: 3px solid rgb(55, 150, 173)"></div>
                    <div class="card border-0 h-100">
                        <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                        <div class="card-body">
                            <p class="card-text text-justify font-weight-light">Lorem ipsum dolor sit amet consectetur,
                                adipisicing
                                elit. Dicta, sed atque, eos soluta provident voluptas placeat cum impedit quam sapiente
                                error</p>
                        </div>
                        <div class="card-footer border-top-0">
                            <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                            <a href="#" class="badge badge-secondary">Ethereum</a>
                            <a href="#" class="badge badge-secondary">Bitcoin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color:#0e132b">
        <div class="container pt-4">
            <footer class="py-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <h5 class="text-white">Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <h5 class="text-white">Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blogs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Posts</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gigs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chats</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <form class="">
                            <h5 class="text-white">Subscribe to our newsletter</h5>
                            <p class="text-white">Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p class="text-white">&copy; 2021 Edvin->Blog, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-light" href="#"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
@endsection
