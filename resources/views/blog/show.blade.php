@extends('blog.layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>

            <span class="inline-block bg-blue-100 text-blue-600 text-sm font-medium px-3 py-1 rounded-full">
                {{ $post->category->title }}
            </span>

            <hr class="my-6 border-gray-300">

            <p class="text-gray-700 text-lg leading-relaxed">{{ $post->content }}</p>
        </div>
    </div>
@endsection
