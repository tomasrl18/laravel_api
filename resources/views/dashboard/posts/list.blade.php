@extends('dashboard.layout')

@section('content')
    <h2 class="uppercase text-center text-6xl">Posts List</h2>
    <div class="text-end mb-10 mt-10">
        <a href="{{ route('post.create') }}" target="_blank" class="btn font-bold text-xl">
            CREATE A POST
        </a>
    </div>

    @include('dashboard.fragment.session-messages')

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    {{ $post->id }}
                </td>
                <td>
                    {{ $post->title }}
                </td>
                <td>
                    {{ $post->posted }}
                </td>
                <td>
                    {{ $post->category->title }}
                </td>
                <td class="options-container">
                    <a href="{{ route('post.edit', $post->id) }}" class="mr-2 hover:opacity-80 actions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path class="other-actions" fill="#333333"
                                  d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z"/>
                        </svg>
                    </a>
                    <a href="{{ route('post.show', $post->id) }}" class="mr-2 hover:opacity-80 actions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path class="other-actions" fill="#333333"
                                  d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/>
                        </svg>
                    </a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path class="delete-action" fill="none" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-5">
        {{ $categories->links() }}
    </div>
@endsection
