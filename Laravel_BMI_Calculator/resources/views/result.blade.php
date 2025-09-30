<!doctype html>
<html>
<head>
    <title>BMI Result</title>
</head>
<body>
    <h2>Your BMI Result</h2>
    <p><strong>BMI:</strong> {{ number_format($bmi, 2) }}</p>
    <p><strong>Status:</strong> {{ $result }}</p>
    <img src="{{ asset('images/' . $image) }}" alt="{{ $result }}" width="250">
    <br><br>
    <a href="/bmi">Calculate Again</a>
</body>
</html>