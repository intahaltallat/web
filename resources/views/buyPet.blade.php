<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Buy Pet</title>
</head>
<body>

@include('layouts.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="titlepage">
                <h2>Buy Pet</h2>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mx-auto">
            @if(isset($data))
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Pet Information</h2>
                        <img src="{{ asset('storage/' . $data['image_path']) }}" class="card-img-top" alt="Pet Image">
                        <p class="card-text"><strong>Pet ID:</strong> {{ $data->id }}</p>
                        <p class="card-text"><strong>Pet Nickname:</strong> {{ $data->nickname }}</p>
                        <p class="card-text"><strong>Pet Breed:</strong> {{ $data->breed }}</p>
                        <p class="card-text"><strong>Pet Age:</strong> {{ $data->age }}</p>
                        <p class="card-text"><strong>Pet Gender:</strong> {{ $data->gender }}</p>
                        <p class="card-text"><strong>Pet Group:</strong> {{ $data->group }}</p>
                        <p class="card-text"><strong>Pet Price:</strong> {{ $data->price }}</p>
                        <p class="card-text"><strong>Pet Owner_message:</strong> {{ $data->owner_msg }}</p>
                        <p class="card-text"><strong>Pet Training:</strong> {{ $data->training}}</p>
                        <p class="card-text"><strong>Pet Vaccination:</strong> {{ $data->vaccination }}</p>
                        <p class="card-text"><strong>Pet Behaviour:</strong> {{ $data->behaviour }}</p>

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h2 class="card-title">Owner Information</h2>
                        <p class="card-text"><strong>Owner Name:</strong> {{ $data->owner->name }}</p>
                        <p class="card-text"><strong>Owner Email:</strong> {{ $data->owner->email }}</p>

                    </div>
                </div>
            @else
                <div class="alert alert-warning mt-4" role="alert">
                    No data available for the specified pet.
                </div>
            @endif
        </div>
    </div>
</div>

@include('layouts.footer')

</body>
</html>
