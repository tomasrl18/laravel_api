@extends('blog.layout')

@section('content')
    <x-blog.post.show :post="$post"></x-blog.post.show>
@endsection
