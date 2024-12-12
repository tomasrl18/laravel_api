<div class="container mx-auto px-4">
    <div class="pt-5 space-y-4">
        @foreach($posts as $post)
            <div class="bg-gray-100 border border-gray-300 rounded-lg p-4 shadow hover:shadow-lg transition duration-200">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h3>

                <a href="#" class="text-blue-600 hover:underline font-medium">Ruta de show</a>

                <p class="text-gray-600 mt-3">{{ $post->description }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</div>
