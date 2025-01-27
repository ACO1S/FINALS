<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST" action="/login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit">Login</button>

        <div>
            <p>Don't have an account? <a href="/register">Register here</a>.</p>
        </div>
    </form>

</body>
</html>