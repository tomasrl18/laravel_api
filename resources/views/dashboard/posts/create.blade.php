@extends('dashboard.layout')

@section('content')
    @include('dashboard.fragment.errors-form')
    <form action="{{ route('post.store') }}" method="post">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">CREATE A POST</h2>

        @include('dashboard.posts.fragment.form')

        <div class="mt-6">
            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                CREATE
            </button>
        </div>
    </form>
@endsection
