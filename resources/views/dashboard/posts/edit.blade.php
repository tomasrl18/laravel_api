@extends('dashboard.posts.layout')

@section('content')
    <h2>Updating post: {{ $post->title }}</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" class="form">
        @method('PATCH')
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="input" value="{{ $post->title }}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="input" value="{{ $post->slug }}">

        <label for="description">Description</label>
        <textarea name="description" id="description" class="textarea">{{ $post->description ?? '' }}</textarea>

        <label for="content">Content</label>
        <textarea name="content" id="content" class="textarea">{{ $post->content ?? '' }}</textarea>

        <label for="category_id">Pick a category</label>
        <select name="category_id" id="category_id" class="select">
            @foreach($categories as $title => $id)
                <option value="{{ $id }}" {{ $post->category_id == $id ? 'selected' : '' }}>{{ $title }}</option>
            @endforeach
        </select>

        <label for="posted">Published</label>
        <select name="posted" id="posted" class="select">
            <option value="no" {{ $post->posted == 'no' ? 'selected' : '' }}>No</option>
            <option value="yes" {{ $post->posted == 'yes' ? 'selected' : '' }}>Yes</option>
        </select>

        <button type="submit" class="button">EDIT</button>
    </form>

    <style>
        .form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        label {
            font-weight: bold;
            margin-bottom: 0.3rem;
        }

        .input, .textarea, .select {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            background-color: #f9f9f9;
            transition: border 0.2s;
        }

        .input:focus, .textarea:focus, .select:focus {
            border-color: #4CAF50;
            outline: none;
            background-color: #fff;
        }

        .textarea {
            min-height: 100px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            font-size: 1.5rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
@endsection
