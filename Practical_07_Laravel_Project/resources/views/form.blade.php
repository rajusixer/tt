<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="{{ route('submit.form') }}" method="post">
        @csrf
        <b><label>Name:</label></b>
        <input type="text" name="name" required><br><br>
        <b><label>Email:</label></b>
        <input type="email" name="email" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>