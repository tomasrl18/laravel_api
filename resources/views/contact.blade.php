@extends('layout')

@section('content')
    <h1>Contact 1</h1>
    <p>{{ $name }}</p>

    @if($name != 'Tomás')
        <p>Your name is not Tomás, is {{ $name }}</p>
    @else
        <p>Bienvenido Tomás</p>
    @endif

    @foreach([1, 2, 3, 4, 5] as $number)
        <p>{{ $number }}</p>
    @endforeach
@endsection
