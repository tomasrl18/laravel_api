@extends('dashboard.layout')

@section('content')
    <h2>CREATE A CATEGORY</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('category.store') }}" method="post">
        @include('dashboard.categories.fragment.form')

        <button type="submit">CREATE</button>
    </form>
@endsection
