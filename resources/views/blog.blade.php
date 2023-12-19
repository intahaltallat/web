<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/123926b258.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
  </head>

  <body>
    @include('layouts.header')
    <main>
      <div class="d-flex flex-column container ">
        <div class="d-flex flex-row blog-row">
          <!-- Image -->
          <div class="col-3">
            <img src="images/blog1.jpg" alt="Image" class="img-fluid blog-img" style="max-width: 200px"/>
          </div>

          <!-- Inner Div with Paragraphs in Flex Column -->
          <div class="col-8">
            <div class="d-flex flex-column ml-3">
              <p class="mb-2 blog-p2">Interesting Facts About Dogs</p>
              <p class="mb-2 blog-p3">
                A dog is a man’s best friend”. We are sure that your squo;have
                heard this phrase at least once in your life but if we were to
                rephrase this, we would replace “best friend; with “family;. Due
                to a dog;s friendly and amicable nature, they have been a
                worldwide sensation for a long, long time now. There are several
                reasons behind why ;puppy dog eyes; has become a popular
                terminology in everyday life – whenever your pup friend looks at
                you with its cute pleading eyes, it becomes difficult, or rather
                impossible to say no.
              </p>
            </div>
          </div>
        </div>

        <div class="d-flex flex-row blog-row">
          <!-- Image -->
          <div class="col-3">
            <img src="images/blog2.jpg" alt="Image" class="img-fluid blog-img" style="max-width: 200px"/>
          </div>

          <!-- Inner Div with Paragraphs in Flex Column -->
          <div class="col-8">
            <div class="d-flex flex-column ml-3">
              <p class="mb-2 blog-p2">
                Preparing Your Pet For Life After COVID
              </p>
              <p class="mb-2 blog-p3">
                COVID-19 has changed not only our lifestyle, but also the lives
                of our beloved pets. Although, we’ve adapted to this new
                lifestyle and learned how to make ends meet to some extent, our
                pets don’t have the same intellect as we do. Just like we got
                used to the habit of sitting at home all day due to lockdowns
                (and gaining extra pounds, unfortunately), it wasn’t any
                different for our four-legged friends. One day or another,
                hopefully, the pandemic will become ancient history; which is
                why it is important for us as pet-parents to train our adorable
                animal friends for life after the pandemic.
              </p>
            </div>
          </div>
        </div>

        <div class="d-flex flex-row blog-row">
          <!-- Image -->
          <div class="col-3">
            <img src="images/blog3.jpg" alt="Image" class="img-fluid blog-img" style="max-width: 200px"/>
          </div>

          <!-- Inner Div with Paragraphs in Flex Column -->
          <div class="col-8">
            <div class="d-flex flex-column ml-3">
              <p class="mb-2 blog-p2 ">
                Tips To Keep Your Pet Entertained While Social Distancing
              </p>
              <p class="mb-2 blog-p3">
                Stay-at-home training

                Training centres may be closed during these trying times but that certainly does not mean that the doors of your home are. It’s imperative to make sure that your pet is as high-spirited as can be. Reinforcing previous training sessions at home can keep your pet’s health in check.
                
                Come up with new tricks
                
                For the younglings, you need to start teaching them tricks from scratch, but when it comes to the older ones who already have a bunch of tricks up their sleeve, you need to come up with new and creative ways to keep them entertained. This will not only strengthen their bones, but their mental muscles as well.
                
                Discover new parks
                
              </p>
            </div>
          </div>
        </div>

        <div class="d-flex flex-row blog-row">
          <!-- Image -->
          <div class="col-3">
            <img src="images/blog4.jpg" alt="Image" class="img-fluid blog-img" style="max-width: 200px"/>
          </div>

          <!-- Inner Div with Paragraphs in Flex Column -->
          <div class="col-8">
            <div class="d-flex flex-column ml-3">
              <p class="mb-2 blog-p2">
                Tips To Help Your Dog Live A Longer Life
              </p>
              <p class="mb-2 blog-p3">
                Make sure that your dog is eating healthy.Dogs that consume
                about 25% less than the recommended calorie intake have a longer
                lifespan (approximately two years!) and are less prone to
                developing diseases.Talk your pet out for a walk.Taking your dog
                out for morning and evening walks can prove to be euphoric for
                them. Even better, let your dog off-the-leash as socializing
                with other dogs can increase their lifespan.A sound body in a
                sound mind?As your pet-friend grows up, you need to ensure that
                you take out the time to engage them in activities such as
                socialization, training, puzzle games, one-on-one interaction
                and other enrichment activities.
              </p>
            </div>
          </div>
          </div>
          <div class="d-flex flex-row blog-row">
            <!-- Image -->
            <div class="col-3">
              <img src="images/blog5.jpg" alt="Image" class="img-fluid blog-img" style="max-width: 200px"/>
            </div>
  
            <!-- Inner Div with Paragraphs in Flex Column -->
            <div class="col-8">
              <div class="d-flex flex-column ml-3">
                <p class="mb-2 blog-p2">
                    Tips To Train Your Kitten
                </p>
                <p class="mb-2 blog-p3">
                    Invest In The Right Supplies

                    Waking up to cushion filling on the floor and torn up pillows might not be the ideal start to the day. Since kittens talk in feline, it’s important to make sure that you’re using other methods to make sure that your cat is not treating your furniture as their scratch-post.Crate-Training Cats

                    Cats can be quite hyper and difficult to deal with, especially when it comes to transferring them into a crate. As mentioned before, they are clever creatures. This becomes one of the main reasons why cats don’t receive as much veterinary care as do other pets.
                    
                    Preparing your cat for a vet visit starts at home. The first thing you will want to invest in is a comfortable and well-decorated crate. Giving her a cosy bedding and a delicious treat will make your cat make a dash for her crate. Another tip is to always praise her and acknowledge her efforts whenever she enters her ‘kitty den’. This will take some time but with patience, comes ease.
                </p>
              </div>
            </div>
      </div>
    </main>
    @include('layouts.footer')
    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
