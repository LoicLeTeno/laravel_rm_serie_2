<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/image1.jpg') }}" class="d-block w-100" style="height: 100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/image2.jpg') }}" class="d-block w-100" style="height: 100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/animeau1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/animeau2.jpg') }}" class="d-block w-100" style="height: 100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/plat1.jpg') }}" class="d-block w-100" style="height: 100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/plats2.jpg') }}" class="d-block w-100" style="height: 100%" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
