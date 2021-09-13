@extends('layouts.master')


@section('content')
    <h2>Create Post</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/posts" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title :</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="from-group">
                        <label for="">Tag : </label>
                        <select name="tags[]" class="form-control" multiple>
                            @foreach(\App\Models\Tag::all() as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
        <div class="from-group">
            <label for="">Category : </label>
            <select name="categories[]" class="form-control" multiple>
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="body">Body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <br>
        <div class="d-flex justify-content-md-end">
        <button class="btn btn-danger btn-lg ">SEND</button>
        </div>
    </form>
@endsection
