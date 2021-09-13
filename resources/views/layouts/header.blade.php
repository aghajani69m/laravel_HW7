<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">Home Page </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(auth()->check())
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('posts.index')}}">POSTS</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('tags.index')}}">TAGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">CATEGORIES</a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
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
