<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = auth()->user()->posts()->get();
        return view('admin.posts.index')->with('posts',$posts);
    }
    /**
     * Display a list of the resource.
     */
    public function singleShow()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $validate_data = $request->validated();
        $validate_data['slug'] =  str_replace(" ","-",$validate_data['title']);
        $validate_data['name'] = Auth::user()->name;
        $post = auth()->user()->posts()->create($validate_data);
        $post->categories()->attach($validate_data['categories']);
        $post->tags()->attach($validate_data['tags']);
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.singleShow' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if(auth()->user()->name == \App\Models\User::find("$post->user_id")->name) {
            return view('admin.posts.edit', [
                'post' => $post
            ]);
        }else return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $validate_data = $request->validated();
        $validate_data['slug'] =  str_replace(" ","-",$validate_data['title']);
        $post->update($validate_data);
        $post->categories()->sync($validate_data['categories']);
        $post->tags()->sync($validate_data['tags']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('admin/posts');
    }
}
