<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use App\Models\Category;
use App\Http\Requests\Api\Category\{
    StoreRequest,
    UpdateRequest
};

class CategoryController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Category::paginate(10));
    }

    public function store(StoreRequest $request): JsonResponse
    {
        return response()->json(Category::create($request->validated()));
    }

    public function show(Category $category): JsonResponse
    {
        return response()->json($category);
    }

    public function update(UpdateRequest $request, Category $category): JsonResponse
    {
        return response()->json($category->update($request->validated()));
    }

    public function destroy(Category $category): JsonResponse
    {
        if ($category->posts()->count() > 0) {
            return response()->json('A category can\'t be deleted because it has some posts');
        }

        $category->delete();
        return response()->json('Category deleted successfully');
    }
}
