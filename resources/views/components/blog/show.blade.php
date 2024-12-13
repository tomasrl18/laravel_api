<div class="container mx-auto px-6 py-8">
    <div class="bg-white shadow rounded-lg p-6 place-items-center">
        @if($post->image)
            <div class="mb-6">
                <img
                    src="{{ asset('uploads/posts/' . $post->image) }}"
                    alt="{{ $post->title }}"
                    class="w-70 h-auto rounded-lg shadow-md"
                />
            </div>
        @endif

        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>

        <div class="mt-4 text-gray-600 text-center">
            <p class="text-lg">Published on <span class="font-medium">{{ $post->created_at->format('F d, Y') }}</span></p>
        </div>

        <span class="inline-block bg-blue-100 text-blue-600 text-sm font-medium px-3 py-1 rounded-full mt-5 mb-10">
                {{ $post->category->title }}
            </span>

        <p class="text-gray-700 text-lg leading-relaxed">{{ $post->content }}</p>

        <div class="mt-8 text-center">
            <a href="{{ route('blog.index') }}" class="text-blue-500 hover:underline text-xl">← Back to Posts List</a>
        </div>
    </div>
</div>
