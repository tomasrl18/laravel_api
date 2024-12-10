@extends('dashboard.layout')

@section('content')
    <h2>Updating post: {{ $post->title }}</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')

        @include('dashboard.posts.fragment.form', [ 'task' => 'edit' ])

        <button type="submit">EDIT</button>
    </form>
@endsection
