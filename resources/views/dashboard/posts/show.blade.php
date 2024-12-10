@extends('dashboard.layout')

@section('content')
    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        @if($post->image)
            <div class="mb-6">
                <img
                    src="{{ asset('uploads/posts/' . $post->image) }}"
                    alt="{{ $post->title }}"
                    class="w-full h-auto rounded-lg shadow-md"
                />
            </div>
        @endif
        <h1 class="text-4xl font-semibold text-gray-800">{{ $post->title }}</h1>
        <div class="mt-4 text-gray-600">
            <p class="text-sm">Published on <span class="font-medium">{{ $post->created_at->format('F d, Y') }}</span></p>
            <p class="text-sm">Category: <span class="font-medium">{{ $post->category->title }}</span></p>
        </div>

        <div class="mt-6 text-gray-700">
            <p class="text-lg">{{ $post->content }}</p>
        </div>

        <div class="mt-8">
            <a href="{{ route('post.index') }}" class="text-blue-500 hover:underline">← Back to Posts</a>
        </div>
    </div>
@endsection
