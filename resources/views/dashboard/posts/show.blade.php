@extends('dashboard.layout')

@section('content')
    <div>
        @if($post->image)
            <div >
                <img src="{{ asset('uploads/posts/' . $post->image) }}" alt="{{ $post->title }}">
            </div>
        @endif
        <h1>{{ $post->title }}</h1>
        <div>
            <p>Published on <span>{{ $post->created_at->format('F d, Y') }}</span></p>
            <p>Category: <span>{{ $post->category->title }}</span></p>
        </div>
        <div>
            <p>{{ $post->content }}</p>
        </div>
        <a href="{{ route('post.index') }}">← Back to Posts</a>
    </div>
@endsection
