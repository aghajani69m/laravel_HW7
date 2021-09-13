@extends('layouts.master')


@section('content')
    <a class="btn btn-primary d-block justify-content-end mt-3 mb-3 btn-lg" href="admin/tags/create">Create Tag</a>
    <h2>All Tags</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td><a href="tags/{{ $tag->id  }}">{{$tag->title}} &rarr;</a></td>
                    <td>
                        <form action="/admin/tags/{{$tag->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-lg ">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
