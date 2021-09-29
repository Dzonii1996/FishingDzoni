<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return Post::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        return Post::create($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
    }


    public function destroy(Request  $request, $id)
    {
        $post=Post::findOrFail($id);
        $post->delate();
        return 204;
    }
}
