<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class postControler extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function edit(Post $post)
{
    return response()->json($post);
}

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        // kode update post
    }
}