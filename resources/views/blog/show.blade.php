@extends('blog.layout')

@section('content')
    <x-blog.post.show :post="$post"></x-blog.post.show>
    <x-dynamic-component component="blog.post.show" :post="$post" />
@endsection
