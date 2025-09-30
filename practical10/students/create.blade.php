<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
</head>
<body>
    <h1>Add Student Data</h1>

    <form action="{{route('students.store')}}" method="POST">
        @csrf
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <button type="submit">Add Student</button>
    </form>
</body>
</html>