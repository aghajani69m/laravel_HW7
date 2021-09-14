@extends('layouts.master')


@section('content')
    <a class="btn btn-primary d-block justify-content-end mt-3 mb-3 btn-lg" href="posts/create">Create Post</a>
    <h2>All Posts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><a href="posts/{{ $post->id  }}">{{$post->title}} &rarr;</a></td>
                    <td>
                        <form action="/admin/posts/{{$post->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-lg">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
