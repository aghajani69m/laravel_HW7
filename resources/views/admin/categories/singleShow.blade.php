@extends('layouts.master')


@section('content')

        <div class="card">
            <h1>Title : </h1>
            <div class="card-body">
                <h4 class="card-title">{{ $category->title }}</h4>
            <div class="card-footer text-muted">
                <div class="btn-group">
                    @if(auth()->check())
                    <form action="{{$category->id}}" method="post">
                        @csrf
                        @method('delete')
                    <button type="submit" class="btn btn-md btn-outline-danger m-1">Delete</button>
                    </form>
                    <a href="{{$category->id}}/edit" type="button" class="btn btn-md btn-outline-secondary m-1">Edit</a>
                        @endif
                </div>
            </div>
        </div>


@endsection
