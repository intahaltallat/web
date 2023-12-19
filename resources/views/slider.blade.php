<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
    <style>
        .animal-description {
            padding: 20px;
        }
        .animal-description img {
            max-width: 100%;
        }
    </style>
</head>
<body>
@include('layouts.header')


    <!-- Image Slider -->
    <div class="container">
        <div id="imageSlider" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/test1.jpg" height="400" width="1200">
                </div>
                <div class="carousel-item">
                    <img src="images/test2.jpg" height="400" width="1200">
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Animal Description Sections -->


    <!-- Play and Pause Buttons for Image Slider -->
    <div class="text-center mt-3">
        <button id="playButton" class="btn btn-primary">Play</button>
        <button id="pauseButton" class="btn btn-secondary">Pause</button>
    </div>
    @include('layouts.footer')

</body>
</html>