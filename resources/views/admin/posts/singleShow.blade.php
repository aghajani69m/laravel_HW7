@extends('layouts.master')


@section('content')
    <h1 class="my-8">{{ $post->title }}</h1>

    <!-- Blog Post -->


        <div class="card">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->body }}</p>
                 <ul>Category :
               @foreach($post->categories()->get() as $category)
                   <li>{{ $category->title }}</li>
               @endforeach
               </ul>
                <ul>Tag :
                    @foreach($post->tags()->get() as $tag)
                        <li>{{ $tag->title }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="card-footer text-muted">
                <div class="btn-group">
                    @if(auth()->user()->name == \App\Models\User::find("$post->user_id")->name)
                    <form action="{{$post->id}}" method="post">
                        @csrf
                        @method('delete')
                    <button type="submit" class="btn btn-md btn-outline-danger m-1">Delete</button>
                    </form>
                    <a href="{{$post->id}}/edit" type="button" class="btn btn-md btn-outline-secondary m-1">Edit</a>
                        @endif
                </div>
                <h6>Posted By : @php
                        echo \App\Models\User::find("$post->user_id")->name;
                    @endphp
                </h6>
                @php echo "created at : " . $post->created_at ;
                    if($post->created_at != $post->updated_at)  echo "<br>" . "updated at : " . $post->updated_at ;
                @endphp



            </div>
        </div>


@endsection
