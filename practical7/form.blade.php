<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Laravel Form Example</title> 
</head> 
<body> 
    <h1>*--- Fill Out the Details ---*</h1><br> 
    <form action="{{route('submit-form')}}" method="post"> 
        @csrf 
        <label>Name : </label> 
        <input type="text" name="name" required><br><br> 
 
        <label>Email : </label> 
  
        <input type="email" name="email" required><br><br><br> 
 
        <button type="submit">Submit the Form</button> 
    </form> 
</body> 
</html> 