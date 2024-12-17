<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use App\Models\Post;
use App\Http\Requests\Api\Post\{
    StoreRequest,
    UpdateRequest
};

class PostController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Post::paginate(10));
    }

    public function getAllPosts(): JsonResponse
    {
        return response()->json(Post::all());
    }

    public function store(StoreRequest $request): JsonResponse
    {
        return response()->json(Post::create($request->validated()));
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    public function update(UpdateRequest $request, Post $post): JsonResponse
    {
        return response()->json($post->update($request->validated()));
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();
        return response()->json('Post deleted successfully');
    }
}
