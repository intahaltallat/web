<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('layouts.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="titlepage">
                <h2>All Pets</h2>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        @foreach($data as $row)
            <div class="col-md-4">
                <div class="card mb-4 h-100"> <!-- Added 'h-100' class -->
                    <div class="card-body">
                        <h3 class="card-title">PET ADOPTION</h3>
                        <img src="{{  asset('images/' . $row['image_path']) }}" class="card-img-top" alt="Pet Image">
                        <p class="card-text"><strong>Owner ID:</strong> {{$row['owner_id']}}</p>
                        <p class="card-text"><strong>Type:</strong> {{$row['type']}}</p>
                        <p class="card-text"><strong>Breed:</strong> {{$row['breed']}}</p>
                        <p class="card-text"><strong>Nickname:</strong> {{$row['nickname']}}</p>
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
