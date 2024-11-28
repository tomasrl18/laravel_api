@extends('layout')

@section('content')
    <h1>Contact 1</h1>

    @foreach($users as $user)
        <p>{{ $user }}</p>
    @endforeach
@endsection
