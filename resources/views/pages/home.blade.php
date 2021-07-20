<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/change.css') }}">
    <title>Document</title>
</head>
<body>
    @include('partials.header')

    <h1>Loïc</h1>

    @include('partials.carousel.couleur')

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>