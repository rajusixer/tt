<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Result</title>
</head>
<body>
    <h2>Your BMI result is:</h2>
    <p>BMI : {{number_format($bmi,2)}}</p>
    <p>Status : {{$result}}</p>

    <img src="{{asset('images/'.$image)}}" alt="{{$result}}" width="250">
    <br>
    <a href="/bmi">Calulate Again</a>
</body>
</html>