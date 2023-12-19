<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <li><a class="active" href="{{route('index')}}">Home</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('add') }}">Add Pet</a></li>
            <li><a href="{{route('slider')}}">Slider</a></li>

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
                    <li><a href="{{route('login')}}">Log In</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
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
      <!-- end header -->
</body>
</html>