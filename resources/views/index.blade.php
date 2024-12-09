@extends('dashboard.layout')

@section('content')
    <div class="homepage-container">
        <h1 class="homepage-title">Welcome to Your Blog Dashboard</h1>
        <p class="homepage-subtitle">Manage your posts and categories efficiently</p>
        <div class="menu-container">
            <a href="{{ route('post.index') }}" class="menu-button">View Posts</a>
            <a href="{{ route('category.index') }}" class="menu-button">View Categories</a>
        </div>
    </div>

    <style>
        .homepage-container {
            max-width: 800px;
            margin: 3rem auto;
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .homepage-title {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .homepage-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .menu-button {
            background-color: #333;
            color: #fff;
            text-decoration: none;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .menu-button:hover {
            background-color: #555;
            transform: translateY(-2px);
        }

        .menu-button:active {
            background-color: #222;
            transform: translateY(0);
        }
    </style>
@endsection
