<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        section {
            margin-top: 1.5rem;
        }

        h1, h2 {
            margin: 0;
        }

        h2 {
            margin-bottom: 1rem;
            color: #4CAF50;
            font-size: 2.5rem;
            text-align: center;
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>
<header>
    <h1>
        <a href="{{ route('index') }}" style="text-decoration: none; color: #ffffff">Blog Dashboard</a>
    </h1>
</header>
<div class="container">
    @yield('content')
    <section>
        @yield('morecontent')
    </section>
</div>
<footer>
    &copy; {{ date('Y') }} Blog Dashboard. All rights reserved.
</footer>
</body>
</html>
