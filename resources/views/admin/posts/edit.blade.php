@extends('layouts.master')


@section('content')
    <h2>Edit Post</h2>
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
            <label for="title">Title : </label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
            <input type="hidden" name="user_id" value="{{$post->user_id}}">
        </div>
        <div class="from-group">
            <label for="">Category : </label>
            <select name="categories[]" class="form-control" multiple>
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}" {{ in_array($category->id , $post->categories()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="from-group">
            <label for="">Tag : </label>
            <select name="tags[]" class="form-control" multiple>
                @foreach(\App\Models\Tag::all() as $tag)
                    <option value="{{ $tag->id }}" {{ in_array($tag->id , $post->tags()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="body">Body : </label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
        </div>
        <button class="btn btn-info" type="submit">Update</button>
    </form>
@endsection
