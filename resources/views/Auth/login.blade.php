@extends('layouts.apps')
@section('content')

<div class="container jumbotron pt-3" style="width: 20%; margin-top:25vh">
    <h1 class="text-center" style="font-family: monospace; font-weight:bold ">Login</h1>

    <form action="{{Route('login')}}" method="POST">
        @csrf
        @method("post")

        @if (Session::get('incorrect'))
            <div class="alert alert-danger alert-dismissible fade show text-dark">
               {{Session::get('incorrect')}}
               <button type="button" class="close" style="outline: none" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif

        @if (Session::get('fail'))
        <div class="alert alert-danger alert-dismissible fade show text-dark">
           {{Session::get('fail')}}
           <button type="button" class="close" style="outline: none" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
        <div class="form-group"> <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
            <span class = "text-danger">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="form-group"> <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            <span class = "text-danger">@error('password'){{$message}}@enderror</span>
        </div>


        <button type="submit" class="btn btn-sm btn-primary"> Login</button>
        <span class="float-right">Dont Have an account <a href="/register">register Here</a></span>

    </form>
</div>
@endsection
