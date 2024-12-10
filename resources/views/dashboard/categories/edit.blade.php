@extends('dashboard.layout')

@section('content')
    <h2>Updating post: {{ $category->title }}</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('PATCH')

        @include('dashboard.categories.fragment.form')

        <button type="submit">EDIT</button>
    </form>
@endsection
