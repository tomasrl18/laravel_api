<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Http\Requests\Api\Post\{
    StoreRequest,
    UpdateRequest
};

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::paginate(10));
    }

    public function store(StoreRequest $request)
    {
        return response()->json(Post::create($request->validated()));
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function update(UpdateRequest $request, Post $post)
    {
        return response()->json($post->update($request->validated()));
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json('Post deleted successfully');
    }
}
