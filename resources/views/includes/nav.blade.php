{{-- START OF NAVBAR --}}

<div class="container-fluid p-3" style="background-color: #0e132b">
    <nav class="container navbar navbar-expand-lg navbar-dark">
        <a class="nav-link pr-5" style="color: white" href="/">Blogaweb</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-weight: 500">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME</a>
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

                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endguest

                @auth
                <li class="nav-item active">
                    <form class="nav-link active" action={{ Route('logout') }} method="POST">
                        @csrf
                        <input value="LOGOUT" type="submit"
                            class="bg-transparent text-white border-0 font-weight-semibold">
                    </form>
                </li>

                <li class="nav-item active">
                    <a class="nav-link text-white text-capitalize">Welcome: {{auth()->user()->name}}</a>
                </li>
                @endauth
            </ul>


            <form method="{{}}" action="GET">
                <div class="input-group">
                    {{-- <div class="input-group-prepend">
                        <button type="submit" class="input-group-text" style="outline: none"><i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div> --}}
                    <input type="search" class="form-control" name="search" placeholder="Search">
                </div>
            </form>
    </nav>
</div>

    {{-- END OF NAVBAR SECTION --}}
