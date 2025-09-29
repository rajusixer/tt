<!doctype html>
<html>
<head><title></title></head>
<body>
<form method="post" action="{{route('calculate')}}">
@csrf 
<h2 class=”mb-4”>Saif TCS2526010</h2>
<b><label>Weight in Kilogram</label></b>
<input type="number" name="weight" required><br><br>
<b><label>Height in Centimeter</label></b>
<input type="number" name="height" required><br><br>
<button type="submit">Submit</button>
</form>
</body>
</html>
