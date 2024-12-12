@extends('blog.layout')

@section('content')
    <x-blog.post.index :posts="$posts">
        @slot('header')
            <header>
                <h1 class="text-4xl font-bold text-white mb-8 text-center border-b pb-4">
                    Posts List
                </h1>
            </header>
        @endslot

        @slot('footer')
            <hr class="my-12">
            <footer class="bg-gray-800 text-white py-6 mt-12 rounded-lg shadow-md shadow-red-700 transition-all duration-300">
                <div class="container mx-auto px-4 text-center space-y-4">
                    <p class="text-lg font-semibold">Thank you for visiting our blog!</p>

                    <nav class="flex justify-center space-x-6">
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition duration-200">About Us</a>
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition duration-200">Contact</a>
                        <a href="#" class="text-blue-400 hover:text-blue-300 transition duration-200">Privacy Policy</a>
                    </nav>

                    <p class="text-sm text-gray-400">
                        &copy; {{ now()->year }} BlogApp. All rights reserved.
                    </p>
                </div>
            </footer>
        @endslot
    </x-blog.post.index>
@endsection
