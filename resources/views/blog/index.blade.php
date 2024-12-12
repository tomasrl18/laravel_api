@extends('blog.layout')

@section('content')
    <x-blog.post.index :posts="$posts">
        Posts List
    </x-blog.post.index>
@endsection
