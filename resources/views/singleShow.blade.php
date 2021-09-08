@extends('layouts.master')


@section('content')
    <h1 class="my-4">{{ $post->title }}</h1>

    <!-- Blog Post -->


        <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer text-muted">
                {{$post->created_at}}

                {{-- <ul>
                @foreach($post->categories()->get() as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
                </ul> --}}
                
            </div>
        </div>


@endsection
