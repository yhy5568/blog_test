<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>@yield('header', 'My Blog')</h1>

        <nav>
            <ul>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('posts.create') }}">Create Post</a></li>
            </ul>
        </nav>

        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>