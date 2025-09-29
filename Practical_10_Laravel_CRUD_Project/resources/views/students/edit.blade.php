<!DOCTYPE html> 
<html> 
<head> 
    <title>Edit Student</title> 
</head> 
<body> 
    <h1>Edit Student</h1> 
    
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('students.update', $student->id) }}" method="POST"> 
        @csrf 
        @method('PUT') 
        Name: <input type="text" name="name" value="{{ $student->name }}" required><br><br> 
        Email: <input type="email" name="email" value="{{ $student->email }}" required><br><br> 
        <button type="submit">Update</button> 
        <a href="{{ route('students.index') }}">Back</a>
    </form> 
</body> 
</html>