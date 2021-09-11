@extends('layouts.master')


@section('content')
    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    <!-- Blog Post -->
    <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


    @foreach($posts as $post)
    <div class="col">
        <div class="card shadow-sm">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}

          <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">@php echo substr( $post->title , 0 , 20 ) . " . . ."; @endphp</h5>
                <p class="card-text">@php echo substr( $post->body , 0 , 50 ) . " . . ."; @endphp </p>
                <a href="admin/posts/{{ $post->id  }}" class="btn btn-primary">Read More &rarr;</a>
            </div>

            <div class=" justify-content-between align-items-center card-footer text-muted">
                <h6>Posted By : @php
                echo \App\Models\User::find("$post->user_id")->name;
                @endphp
                </h6>
               <h6> Posted on : {{$post->created_at }}</h6>
            </div>


          </div>
        </div>
      </div>

            {{-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->body }}</p>
                <a href="admin/posts/{{ $post->id  }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on : {{$post->created_at }}
            </div> --}}
    @endforeach


    {{-- <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul> --}}
@endsection


@section('sidebar')
    @parent

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Bar Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>
@endsection
