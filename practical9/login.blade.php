<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="/login" method="POST">
        @csrf
        Enter your Name: <input type="text" name="name" required>
        <button type="submit">submit</button>
    </form>
</body>
</html>