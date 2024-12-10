@extends('dashboard.layout')

@section('content')
    <div class="mt-8 p-6 text-center place-items-center">
        @if($post->image)
            <div class="mb-6">
                <img
                    src="{{ asset('uploads/posts/' . $post->image) }}"
                    alt="{{ $post->title }}"
                    class="w-70 h-auto rounded-3xl shadow-md"
                />
            </div>
        @endif
        <h1 class="text-4xl font-semibold text-gray-800">{{ $post->title }}</h1>
        <div class="mt-4 text-gray-600">
            <p class="text-lg">Published on <span class="font-medium">{{ $post->created_at->format('F d, Y') }}</span></p>
            <p class="text-lg">Category: <span class="font-medium">{{ $post->category->title }}</span></p>
        </div>

        <div class="mt-6 text-gray-700">
            <p class="text-2xl">{{ $post->content }}</p>
        </div>

        <div class="mt-8">
            <a href="{{ route('post.index') }}" class="text-blue-500 hover:underline text-xl">← Back to Posts</a>
        </div>
    </div>
@endsection
