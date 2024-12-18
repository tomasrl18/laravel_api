<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use App\Models\Post;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Requests\Api\Post\{
    StoreRequest,
    UpdateRequest
};
use App\Http\Resources\Api\Post\ListResource;

class PostController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return ListResource::collection(Post::paginate(10));
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

    public function findPostBySlug(string $slug): JsonResponse
    {
        $post = Post::whereSlug($slug)->firstOrFail();

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
