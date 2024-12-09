@extends('dashboard.posts.layout')

@section('content')
    <h2 class="table-title">Categories List</h2>

    <div class="button-container">
        <a class="create-post-button" href="{{ route('category.create') }}" target="_blank">
            CREATE A CATEGORY
        </a>
    </div>

    <table class="styled-table">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#333333" d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83l3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75z"/></svg>
                    </a>
                    <a href="{{ route('category.show', $category->id) }}" class="a-options">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#333333" d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5"/></svg>
                    </a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="trash">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/></svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

    <style>
        .table-title {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: #333;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .styled-table thead {
            background-color: #333;
            color: #fff;
        }

        .styled-table th, .styled-table td {
            text-align: left;
            padding: 0.8rem 1rem;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .styled-table tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        .styled-table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .styled-table td {
            border-top: 1px solid #ccc;
        }

        .styled-table th {
            border-bottom: 2px solid #555;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 1rem;
        }

        .create-post-button {
            background-color: #333;
            color: #fff;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .create-post-button:hover {
            background-color: #555;
            transform: translateY(-2px);
        }

        .create-post-button:active {
            background-color: #222;
            transform: translateY(0);
        }

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
