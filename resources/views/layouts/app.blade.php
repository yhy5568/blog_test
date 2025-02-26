<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>@yield('header', 'My Blog')</h1>

        <nav>
            <ul>
                <li id="postItem"><a href="{{ route('posts.index') }}" id="postText">Posts</a></li>
                <li><a href="{{ route('posts.create') }}">Create Post</a></li>
            </ul>
        </nav>

        <div>
            <button id="toggleButton" class="btn btn-primary">toggle post text</button>
        </div>

        <div>
            @yield('content')
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#toggleButton').click(function() {
                $.ajax({
                    url: 'toggle-post-text',
                    method: 'GET',
                    success: function(response) {
                        if (response.text == 'zzzzz') {
                            $('#postText').text('zzzzz');
                        } else {
                            $('#postText').text('Posts');
                        }
                    }
                })
            })
        })
    </script>
</body>
</html>