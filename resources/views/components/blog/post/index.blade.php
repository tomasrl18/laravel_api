<div class="container mx-auto px-4 py-8">
    <div class="pt-5 space-y-4">
        <h1 class="text-4xl font-bold text-white mb-8 text-center border-b pb-4">
            {{ $slot }}
        </h1>

        @isset($header)
            <span class="text-white">
                {{ $header }}
            </span>
        @endisset

        @isset($postContent)
            <span class="text-white">
                {{ $postContent }}
            </span>
        @endisset

        @isset($footer)
            <span class="text-white">
                {{ $footer }}
            </span>
        @endisset

        <div class="space-y-6">
            @foreach($posts as $post)
                <div class="bg-gray-50 hover:bg-gray-200 hover:scale-105 border border-gray-300 rounded-lg p-5 shadow hover:shadow-lg transition-all duration-300">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">
                        {{ $post->title }}
                    </h3>

                    <a href="{{ route('blog.show', $post) }}" class="text-blue-500 hover:text-blue-700 font-medium transition duration-200">
                        See de details
                    </a>

                    <p class="text-gray-600 mt-4 leading-relaxed">{{ $post->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</div>
