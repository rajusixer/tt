<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student data</title>
</head>
<body>
    <h1>Edit Student Data</h1>
    <form action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{$student->name}}" required><br><br>
        Email: <input type="email" name="email" value="{{$student->email}}" required><br><br>
        <button type="submit">Update Student</button>
    </form>
</body>
</html>