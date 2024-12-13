@extends('blog.layout')

@section('content')
    <x-blog.post.show :post="$post" data-id="1" class="demo"></x-blog.post.show>
@endsection
