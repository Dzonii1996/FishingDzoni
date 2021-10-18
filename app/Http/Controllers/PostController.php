<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search;

        $posts = Post::with(['author',
            'featured_image']);

        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();

        return response()->json($posts);

            }






    public function store(Request $request)
    {
        return Post::create($request->all());
        return response()->json($post, 201);
    }


    public function show(Post $post)
    {
        return $post;

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post, 200);
    }


    public function delete(Post $post)
    {
        $post->delate();
        return response()->json($post, 204);
    }
}
