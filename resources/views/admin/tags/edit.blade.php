@extends('layouts.master')


@section('content')
    <h2>Edit Tag</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/tags/{{ $tag->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title : </label>
            <input type="text" name="title" class="form-control" value="{{ $tag->title }}">
        </div>
        <button class="btn btn-info" type="submit">Update</button>
    </form>
@endsection
