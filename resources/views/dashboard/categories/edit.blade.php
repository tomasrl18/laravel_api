@extends('dashboard.layout')

@section('content')
    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        @include('dashboard.fragment.errors-form')
        <form action="{{ route('category.update', $category->id) }}" method="post">
            <h2>Updating post: {{ $category->title }}</h2>

            @method('PATCH')

            @include('dashboard.categories.fragment.form')

            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    EDIT
                </button>
            </div>
        </form>
    </div>
@endsection
