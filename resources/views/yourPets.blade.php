<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/123926b258.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/script.js') }}" defer></script>
    <title>Document</title>

<style>
        /* Add your custom styles here */

body {
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    margin-top: 30px;
}

.titlepage {
    margin-bottom: 30px;
}

.heading_container {
    margin-bottom: 30px;
}

.box {
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.service_text h3 {
    color: #333;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
}

.img-box {
    position: relative;
}

.img-box img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.detail-box {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(255, 255, 255, 0.9);
    padding: 10px;
    width: 100%;
    border-radius: 0 0 5px 5px;
    box-sizing: border-box;
}

.type {
    color: #3498db;
    font-weight: 600;
    margin-bottom: 5px;
}

.breed {
    color: #555;
    margin-bottom: 5px;
}

.detail-box a {
    display: inline-block;
    background: #3498db;
    color: #fff;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 3px;
    transition: background 0.3s ease;
}

.detail-box a:hover {
    background: #2c3e50;
}

/* Add more styles as needed */

</style>
</head>

<body>
@include('layouts.header')


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h2 class="mb-4">YOUR PETS</h2>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($data as $row)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card mb-4 h-100"> 
                <img src="{{ asset('images/' . $row['image_path']) }}" class="card-img-top" alt="Pet Image">
                <div class="card-body d-flex flex-column"> 
                <h5 class="card-title mb-auto">{{$row['nickname']}}</h5> 
                <p class="card-text">{{ $row['type'] }} - {{ $row['breed'] }}</p>
                <a href="{{ route('buyPet', ['id' => $row['id']]) }}" class="btn btn-primary mt-auto">Read More</a> <!-- Added 'mt-auto' class -->
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

    @include('layouts.footer')

</body>
</html>