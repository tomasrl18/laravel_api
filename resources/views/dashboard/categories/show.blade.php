@extends('dashboard.layout')

@section('content')
    <div class="max-w-2xl mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg text-center">
        <div class="border-b border-gray-200 pb-4 mb-4">
            <h1 class="text-4xl font-bold text-gray-800">{{ $category->title }}</h1>
            <p class="text-lg text-gray-600 mt-2">Slug: {{ $category->slug }}</p>
        </div>

        <div class="flex justify-center">
            <div>
                <h2 class="text-xl font-semibold text-gray-700 mb-3">Detalles de la Categoría</h2>
                <div class="flex items-center justify-center">
                    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>Creada: {{ $category->created_at->format('d/m/Y') }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
