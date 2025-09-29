<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
</head>
<body>
<h3>Saif TCS2526010</h3>
<h2>Login</h2>
<form action="/login" method="POST">
@csrf
<h2><label>Enter your name:</label>
<input type="text" name="name" required> <br></h2>
<button type="submit">Login</button>
</form>
</body>
</html>
