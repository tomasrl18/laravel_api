@extends('dashboard.layout')

@section('content')
    <h2>Updating post: {{ $category->title }}</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="post" class="form">
        @method('PATCH')

        @include('dashboard.categories.fragment.form')

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

        .input {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            background-color: #f9f9f9;
            transition: border 0.2s;
        }

        .input:focus {
            border-color: #4CAF50;
            outline: none;
            background-color: #fff;
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
