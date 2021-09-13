@extends('layouts.master')


@section('content')
    <a class="btn btn-primary d-block justify-content-end mt-3 mb-3 btn-lg" href="admin/categories/create">Create Category</a>
    <h2>All Category</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td><a href="categories/{{ $category->id  }}">{{$category->title}} &rarr;</a></td>
                    <td>
                        <form action="/admin/categories/{{$category->id}}" method="post">
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
