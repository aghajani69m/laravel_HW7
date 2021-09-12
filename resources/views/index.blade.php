@extends('layouts.master')


@section('content')
    <h1 class="my-4">Page Heading :
        <small> BLOG</small>
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
                <h5 class="card-title">@php echo substr( $post->title , 0 , 25 ) . " . . ."; @endphp </h5>
                <p class="card-text">@php echo substr( $post->body , 0 , 50 ) . " . . ."; @endphp </p>
                <a href="admin/posts/{{ $post->id  }}" class="btn btn-primary">Read More &rarr;</a>
            </div>

            <div class=" justify-content-between align-items-center card-footer text-muted">
                <h6>Posted By : <strong>@php
                echo \App\Models\User::find("$post->user_id")->name;
                @endphp
                    </strong></h6>
               <h6> Posted on : {{$post->created_at }}</h6>
            </div>


          </div>
        </div>
      </div>

    @endforeach

@endsection

