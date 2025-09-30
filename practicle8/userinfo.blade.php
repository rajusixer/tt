<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BMI Calculator</h1>
    <form action="{{route('calculate')}}" method="POSt">
        @csrf
        Weight(kg): <input type="number" name="weight" id=""><br>
        Height(cm): <input type="number" name="height" id=""><br>
        <button type="submit">Submit the Details</button><br>
    </form>
</body>
</html>