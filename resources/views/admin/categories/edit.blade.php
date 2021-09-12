@extends('layouts.master')


@section('content')
    <h2>edit Post</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/posts/{{ $post->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">title : </label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            <input type="hidden" name="user_id" value="{{$post->user_id}}">
        </div>
        <div class="form-group">
            <label for="slug">slug : </label>
            <input type="text" name="slug" class="form-control" value="{{ $post->slug }}">

        </div>

{{--        <div class="from-group">--}}
{{--            <label for="">category : </label>--}}
{{--            <select name="categories[]" class="form-control" multiple>--}}
{{--                @foreach(\App\Category::all() as $category)--}}
{{--                    <option value="{{ $category->id }}" {{ in_array($category->id , $article->categories()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $category->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}

        <div class="form-group">
            <label for="body">body : </label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
        </div>
        <button class="btn btn-info" type="submit">update</button>
    </form>
@endsection
