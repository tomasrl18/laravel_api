@extends('dashboard.layout')

@section('content')
    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-semibold text-gray-800">{{ $category->title }}</h1>
        <p class="text-3xl font-semibold text-gray-800">{{ $category->slug }}</p>
    </div>

@endsection
