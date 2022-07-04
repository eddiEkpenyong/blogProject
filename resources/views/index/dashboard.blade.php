@extends('layouts.app')

{{-- START OF NAVBAR --}}
@section('navbar')
    <nav class="container navbar navbar-expand-lg navbar-dark">
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
{{-- END OF NAVBAR SECTION --}}


@section('header')
    <div class="row align-items-center pb-2 pt-5">
        <div class="col-md-6 col-12">
            <p class="mb-0">Get Daily Updates On CryptoCurrencies</p>
            <h2 class="mb-0 h1" style="font-weight:500; color:#0e259b">EDVIN CRYPTO->BLOG</h2>
        </div>
        <div class="col-md-6 col-12">
            <img src={{ asset('storage/images/deveops.svg') }} alt="" class="img-fluid">
        </div>
    </div>
@endsection

@section('trending')
    <h6 class="mt-5 pt-4" style="border-bottom:3px solid black"><span class="bg-danger px-2 pt-1 text-white">TRENDING</span>
    </h6>

    <div class="row g-4 mt-3">
        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold"> About CryptoCurrency</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/eth.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold">Ethereum Network</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold"> About CryptoCurrency</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/eth.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold">Ethereum Network</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold"> About CryptoCurrency</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/eth.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold">Ethereum Network</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold"> About CryptoCurrency</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="card border-0 h-100">
                <img src={{ asset('storage/images/eth.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-center font-weight-bold">Ethereum Network</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel slide" id="slider" data-ride="carousel">
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

    <div class="row mt-2 gy-2">
        <div class="col-md-4">
            <span class="bg-info px-2 pt-1 mb-0 text-white">TRENDING</span>
            <div class="border-bottom mb-2" style="border: 3px solid rgb(55, 150, 173)"></div>

            <div class="card border-0 h-70">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-justify font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Molestiae vitae veritatis alias facilis cupiditate esse quos odio assumenda quia quibusdam.
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
            <div class="card border-0 h-70">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-justify font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing
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
            <div class="card border-0 h-70">
                <img src={{ asset('storage/images/btc.svg') }} alt="" class="card-image-top">
                <div class="card-body">
                    <p class="card-text text-justify font-weight-light">Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Dicta, sed atque, eos soluta provident voluptas placeat cum impedit quam sapiente error</p>
                </div>
                <div class="card-footer border-top-0">
                    <span>Tags: </span><a href="#" class="badge badge-secondary">Cryptocurrency</a>
                    <a href="#" class="badge badge-secondary">Ethereum</a>
                    <a href="#" class="badge badge-secondary">Bitcoin</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="container pt-4">
        <footer class="py-5">
            <div class="row">
                <div class="col-2">
                    <h5 class="text-white">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5 class="text-white">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blogs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Posts</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gigs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chats</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5 class="text-white">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <form>
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

@endsection
