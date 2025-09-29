<!DOCTYPE html> 
<html> 
<head> 
    <title>Add Student</title> 
</head> 
<body> 
    <h1>Add Student</h1> 
    
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('students.store') }}" method="POST">
        @csrf 
        Name: <input type="text" name="name" value="{{ old('name') }}" required><br><br> 
        Email: <input type="email" name="email" value="{{ old('email') }}" required><br><br> 
        <button type="submit">Save</button> 
        <a href="{{ route('students.index') }}">Back</a>
    </form>
</body> 
</html>