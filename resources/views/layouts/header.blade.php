<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('posts.index')}}">DashBoard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Services</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Contact</a>--}}
{{--                </li>--}}
            </ul>
        </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                @if(auth()->check())
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger me-md-2 pl-2">LogOut</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-info me-md-2 pl-5">LogIn</a>
                <a href="{{ route('register') }}" class="btn btn-info me-md-2 pl-5">SignUp</a>
            @endif
            </div>

    </div>
</nav>
