<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
</head>
<body>
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Post</button>
        </form>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </div>
</body>
</html>