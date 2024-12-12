@extends('blog.layout')

@section('content')
    <x-blog.post.index :posts="$posts">
        Posts List

        @slot('header')
            Header
        @endslot

        @slot('postContent')
            Content
        @endslot

        @slot('footer')
            Footer
        @endslot
    </x-blog.post.index>
@endsection
