@props([
    'webTitle'=>''
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$webTitle}} | Laravel App</title>

    @vite('resources/css/app.css')
</head>
<body>
<div class="container mt-16">
<x-navbar/>

{{$slot}}
</div>
</body>
</html>
