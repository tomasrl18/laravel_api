<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): String
    {
        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::pluck('id', 'title');

        return view('dashboard.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required|integer',
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500',
            'content' => 'min:7',
            'description' => 'min:7',
            'posted' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description ?? '',
            'content' => $request->content ?? '',
            'category_id' => $request->category,
            'posted' => $request->posted ?? 'no',
        ]);

        return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
