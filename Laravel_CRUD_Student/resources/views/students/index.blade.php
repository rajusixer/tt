<!DOCTYPE html> 
<html> 
<head> 
    <title>Students CRUD</title> 
</head> 
<body> 
    <h1>Students List</h1> 
    <a href="{{ route('students.create') }}">Add Student</a> 
    <br><br> 
    
    @if(session('success')) 
        <p style="color:green;">{{ session('success') }}</p> 
    @endif 
    
    <table border="1" cellpadding="5"> 
        <tr> 
            <th>ID</th><th>Name</th><th>Email</th><th>Actions</th> 
        </tr> 
        @foreach ($students as $student) 
        <tr> 
            <td>{{ $student->id }}</td> 
            <td>{{ $student->name }}</td> 
            <td>{{ $student->email }}</td> 
            <td> 
                <a href="{{ route('students.edit', $student->id) }}">Edit</a> | 
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;"> 
                    @csrf 
                    @method('DELETE') 
                    <button type="submit" onclick="return confirm('Delete this student?')">Delete</button> 
                </form> 
            </td> 
        </tr> 
        @endforeach 
    </table> 
</body> 
</html>