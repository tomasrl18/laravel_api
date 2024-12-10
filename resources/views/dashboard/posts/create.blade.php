@extends('dashboard.layout')

@section('content')
    <h2>CREATE A POST</h2>

    @include('dashboard.fragment.errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.posts.fragment.form')

        <button type="submit">CREATE</button>
    </form>
@endsection
