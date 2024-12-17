<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Http\Requests\Api\Category\{
    StoreRequest,
    UpdateRequest
};

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::paginate(10));
    }

    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(UpdateRequest $request, Category $category)
    {
        return response()->json($category->update($request->validated()));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('Category deleted successfully');
    }
}
