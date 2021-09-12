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
    <form action="/admin/tags" method="post">
        @csrf
        <div class="form-group">
            <label for="title">title :</label>
            <input type="text" name="title" class="form-control">
        </div>

        <br>
        <div class="d-flex justify-content-md-end">
            <button class="btn btn-danger btn-lg ">SEND</button></div>    </form>
@endsection
