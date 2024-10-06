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

  <style>
    .service_text p {
    overflow: hidden;
    height:100px;
    padding-top: 21px;
    padding-bottom: 31px;
    }
  </style>
    <!-- The purpose of using javascript:void(0) as the href value is to prevent the page from refreshing and changing the URL when the link is clicked. It's often used when a link is desired but no action is needed to happen -->    

    <!-- Header -->
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <li><a class="active" href="{{route('index')}}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('showAllPets') }}">All Pets</a></li>
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
                  <li><button id = "logout_button", onclick = "handle_logout()", data-route="{{ route('index') }}">Logout</button></li>
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



    <!-- services -->
    <div class="services">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
               <h1  class="welcome" ><p>Welcome, {{ session('name') }}</p></h1>
               </div>
            </div>
         </div>
         <div class="row">
           <div class="col-md-6">
             <div class="service_text">
               <i><img src="images/icons8-delete-64.jpg" alt="#"/></i>
               <a href="delete_user"><h3>DELETE USER</h3></a>
             </div>
           </div>
           <div class="col-md-6">
             <div class="service_text">
               <i><img src="images/icons8-delete-64.jpg" alt="#"/></i>
               
               <a href="deletepet"><h3>DELETE PET</h3></a>
             </div>
           </div>
           <div class="col-md-6">
             <div class="service_text">
               <i><img src="images/icons8-update-64.jpg" alt="#"/></i>
   
               <a href="update_user"><h3>UPDATE USER INFORMATION</h3></a>
              </div>
           </div>

          <div class="col-md-6">
            <div class="service_text">
              <i><img src="images/icons8-update-64.jpg" alt="#"/></i>
           
              <a href="update_Pet" ><h3>UPDATE PET INFORMATION</h3></a>
            </div>
        </div>
       </div>
     </div>
   <!-- end services -->


    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="Information">
                            <h3>About</h3>
                            <ul class="contain">
                                <li> <a href="Javascript:void(0)"><i><img src="images/loc.png" alt="#"/></i> </a>Islamabad <br> Pakistan</li>
                                <li> <a href="Javascript:void(0)"> <i><img src="images/mail.png" alt="#"/></i> demo@gmail.com <br>demo@gmail.com </a> </li>
                                <li> <a href="Javascript:void(0)"> <i><img src="images/call.png" alt="#"/></i> 090078601<br> 090078601 </a> </li>
                            </ul>
                            <ul class="social_icon text_align_center">
                                <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="Information ">
                                    <h3>Menu</h3>
                                    <ul class="footer_menu">
                                        <li><a href="{{route('index')}}">Home</a></li>
                                        <li><a href="{{ route('services') }}">Services</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('add') }}">Add Pet</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                        <div class="col-md-6">
                            <div class="Information">
                            <h3>Newsletter</h3>
                            <form class="newsletter_form">
                                <input class="email" placeholder=" Your Email" type="text" name="Enter your email">
                                <button class="subs_btn">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright text_align_center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p> ANIMAL LOVERS <a href="https://html.design/"></a></p>
                    </div>
                    <div class="col-md-4">
                        <ul class="foot">
                            <li><a href="javascript:void(0)">Copyright © 2023-2024 Petgolu Private Ltd.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </footer>

</body>
</html>