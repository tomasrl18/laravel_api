@extends('dashboard.posts.layout')

@section('content')
    <h2>CREATE A POST</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.store') }}" method="post" class="form">
        @include('dashboard.posts.fragment.form')

        <button type="submit" class="button">CREATE</button>
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
