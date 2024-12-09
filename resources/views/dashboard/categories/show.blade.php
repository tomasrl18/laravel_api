@extends('dashboard.layout')

@section('content')
    <div class="category-container">
        <h1 class="category-title">{{ $category->title }}</h1>
        <p class="category-slug">{{ $category->slug }}</p>
    </div>

    <style>
        .category-container {
            max-width: 600px;
            margin: 3rem auto;
            padding: 1.5rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .category-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .category-slug {
            font-size: 1.2rem;
            color: #555;
            font-style: italic;
        }
    </style>
@endsection
