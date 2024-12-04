@extends('dashboard.posts.layout')

@section('content')
    <h2 class="table-title">Posts List</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Posted</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
    </style>
@endsection
