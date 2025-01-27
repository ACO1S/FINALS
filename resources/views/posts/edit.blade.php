<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <div class="container">
        <h2>Edit Post</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required>
                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="body">Body</label>
                <textarea id="body" name="body" required>{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <button type="submit">Update Post</button>
        </form>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>

        <a href="{{ route('posts.index') }}">
            <button type="button">Back to Posts</button>
        </a>
    </div>
</body>
</html>
