<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" ></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/123926b258.js" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>

</head>
<body>
    @include('layouts.header')
    <!-- services -->
    <div class="services">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                    <h2>Services we offer</h2>
                 </div>
              </div>
           </div>
           <div class="row">
             <div class="col-md-4">
               <div class="service_text">
                 <i><img src="images/service_icon1.png" alt="#"/></i>
                 <h3>PET ADOPTION</h3>
                 <p>Welcome a furry companion into your life through pet adoption. Our seamless process ensures a perfect match. Experience the joy of transforming a life and creating lasting memories. Adopt, don't shop, and discover the unconditional love that a rescued pet brings.</p>
                 <!-- <a href="services.html">Read More</a> -->
               </div>
             </div>
             <div class="col-md-4">
               <div class="service_text">
                 <i><img src="images/service_icon2.png" alt="#"/></i>
                 <h3>VETERINARY SERVICES</h3>
                 <p>Prioritize your pet's health. From routine check-ups to specialized treatments, our experienced veterinarians ensure optimal well-being. Schedule an appointment for personalized consultations, vaccinations, and preventive care. We're your partners in safeguarding your cherished companion's health.</p>
                 <!-- <a href="services.html">Read More</a> -->
               </div>
             </div>
             <div class="col-md-4">
               <div class="service_text">
                 <i><img src="images/service_icon3.png" alt="#"/></i>
                 <h3>PET TRAINING</h3>
                 <p>Embark on a journey of companionship with professional pet training. Our certified trainers use positive reinforcement to cultivate good behavior and strengthen the bond between you and your pet. Invest in your pet's education for a harmonious and joyful relationship.</p>
               </div>
             </div>
           </div>

           <div class="row">
            <div class="col-md-4">
              <div class="service_text">
                <i><img src="images/service_icon4.png" alt="#"/></i>
                <h3>PET PRODUCTS</h3>
                <p>Discover high-quality pet products designed to enhance your pet's life. From nutritious food to stylish accessories, our curated selection prioritizes safety and functionality. Explore our range for a happier, healthier, and more comfortable life for your pet.</p>
                <!-- <a href="services.html">Read More</a> -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service_text">
                <i><img src="images/service_icon5 .png" alt="#"/></i>
                <h3>LOST AND FOUND</h3>
                <p>Losing a pet can be a heart-wrenching experience. Our services simplify the process, offering a platform for reporting lost pets and connecting communities. Whether you lost or found a pet, let's reunite families and furry friends, one reunion at a time.</p>
                <!-- <a href="services.html">Read More</a> -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="service_text">
                <i><img src="images/service_icon6.png" alt="#"/></i>
                <h3>PET GROOMING</h3>
                <p>Indulge your pet with our premium grooming services. From soothing baths to stylish haircuts, we offer tailored grooming for every breed of you pet. Schedule an appointment for the ultimate grooming experience. Your pet deserves the royal treatment.</p>
                <!-- <a href="services.html">Read More</a> -->
              </div>
            </div>
          </div>
         </div>
       </div>
     <!-- end services -->

     @include('layouts.footer')
    </body>
</html>