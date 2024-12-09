@extends('dashboard.layout')

@section('content')
    <div class="post-details-container">
        @if($post->image)
            <div class="post-image">
                <img src="{{ asset('uploads/posts/' . $post->image) }}" alt="{{ $post->title }}">
            </div>
        @endif
        <h1 class="post-title">{{ $post->title }}</h1>
        <div class="post-meta">
            <p>Published on <span>{{ $post->created_at->format('F d, Y') }}</span></p>
            <p>Category: <span>{{ $post->category->title }}</span></p>
        </div>
        <div class="post-content">
            <p>{{ $post->content }}</p>
        </div>
        <a href="{{ route('post.index') }}" class="back-link">← Back to Posts</a>
    </div>

    <style>
        .post-details-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .post-image {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .post-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .post-title {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
            text-align: center;
        }

        .post-meta {
            font-size: 1rem;
            color: #666;
            text-align: center;
            margin-bottom: 2rem;
        }

        .post-meta span {
            font-weight: bold;
            color: #444;
        }

        .post-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
            margin-bottom: 2rem;
            text-align: justify;
        }

        .back-link {
            display: block;
            text-align: center;
            font-size: 1rem;
            color: #333;
            text-decoration: none;
            margin-top: 2rem;
        }

        .back-link:hover {
            color: #555;
            text-decoration: underline;
        }
    </style>
@endsection
