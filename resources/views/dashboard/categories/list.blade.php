@extends('dashboard.layout')

@section('content')
    <h2>Categories List</h2>

    <div>
        <a href="{{ route('category.create') }}" target="_blank">
            CREATE A CATEGORY
        </a>
    </div>

    @include('dashboard.fragment.session-messages')

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->title }}
                </td>
                <td class="options-container">
                    <a href="{{ route('category.edit', $category->id) }}" class="a-options">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#333333"
                                  d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z"/>
                        </svg>
                    </a>
                    <a href="{{ route('category.show', $category->id) }}" class="a-options">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path fill="#333333"
                                  d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/>
                        </svg>
                    </a>
                    @if(!$category->posts->count())
                        <form action="{{ route('category.destroy', $category->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="trash">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/>
                                </svg>
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

    <style>
        a {
            text-decoration: none;
        }

        td svg {
            cursor: pointer;
            transition: transform 0.2s ease, fill 0.3s ease;
        }

        td svg:hover {
            transform: scale(1.2);
            fill: #555;
        }

        .a-options {
            margin-right: 0.5rem;
            transition: opacity 0.3s ease;
        }

        .a-options:hover {
            opacity: 0.7;
        }

        .options-container {
            display: flex;
            justify-content: normal;
            align-items: center;
            gap: 0.5rem;
        }

        .options-container a,
        .options-container form {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .options-container svg {
            cursor: pointer;
            transition: transform 0.2s ease, fill 0.3s ease;
        }

        .options-container svg:hover {
            transform: scale(1.2);
            fill: #555;
        }

        .trash {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .trash:hover {
            opacity: 0.7;
        }
    </style>
@endsection
