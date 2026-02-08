<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg">
    <h1>Weather Report</h1>
    <h2>Location = {{ $location }}</h2>
    <h2>Temperature = {{ $currentTemp }} Degree Celcius</h2>
    <h2>Weather Condition = {{ $currentCondition }}</h2>
    <img src="{{ asset('cloud.jpg') }}" width="100%" alt="">
</body>
</html>