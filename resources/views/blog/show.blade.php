@extends('blog.layout')

@section('content')
    <x-blog.show :post="$post"></x-blog.show>
@endsection
