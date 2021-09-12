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
            <label for="title">title :</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="from-group">--}}
            {{--            <label for="">tag : </label>--}}
            {{--            <select name="tags[]" class="form-control" multiple>--}}
            {{--                @foreach(\App\Admin\Tag::all() as $tag)--}}
            {{--                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>--}}
            {{--                @endforeach--}}
            {{--            </select>--}}
            {{--        </div>--}}


{{--        <div class="from-group">--}}
{{--            <label for="">category : </label>--}}
{{--            <select name="categories[]" class="form-control" multiple>--}}
{{--                @foreach(\App\Admin\Category::all() as $category)--}}
{{--                    <option value="{{ $category->id }}">{{ $category->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}

        <div class="form-group">
            <label for="body">body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <br>
        <div class="d-flex justify-content-md-end">
        <button class="btn btn-danger btn-lg ">SEND</button></div>
    </form>
@endsection
