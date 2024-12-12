<div>
    <div class="pt-5">
        @foreach($posts as $post)
            <div class="card card-gray-100 mt-2">
                <h3>{{ $post->title }}</h3>

                <a href="#">Ruta de show</a>

                <p>{{ $post->description }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-5">
        {{ $posts->links() }}
    </div>
</div>
