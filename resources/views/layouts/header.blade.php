<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/123926b258.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <!-- header -->
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <li><a class="active" href="{{route('index')}}">Home</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{route('slider')}}">Slider</a></li>
            <li><a href="{{ route('showAllPets') }}">All Pets</a></li>

            @if(session('name'))
            <li><a href="{{ route('add') }}">Add Pet</a></li>
            <li><a href="{{ route('yourPets') }}">Your Pets</a></li>
            @endif

            <li><a href="{{ route('login_admin') }}">Admin Login</a></li>
            <li><a href="{{ route('register_admin') }}">Admin Register</a></li>

        </div>
        <div class="head_top">
            <div class="container">
              <div class="row">
                <div class="col-md-4 d_none">
                  <ul class="con_icon">
                    <li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call 090078601</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul class="social_top text_align_center">
                     <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                     <li> <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                     <li> <a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                     <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                   </ul>
                </div>
                <div class="col-md-4 d_none">
                  <ul class="login_deteil text_align_right">
                  @if(session('name'))
                  <li><button id="logout_button" onclick="handle_logout()" data-route="{{ route('index') }}">Logout</button></li>
                 @else
                   <li><a href="{{route('login')}}">Log In</a></li>
                   <li><a href="{{route('register')}}">Register</a></li>
                  @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="head-bottom">
             <div class="container-fluid">
                <div class="row">
                   <div class="col-sm-3">
                      <div class="logo">
                         <a href="{{route('index')}}">PET<span>GOLU</span></a>
                      </div>
                   </div>
                   <div class="col-sm-9">
                      <ul class="nav_open text_align_right">
                         <li> <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
    </header>
</body>
</html>