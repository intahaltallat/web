<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" ></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/123926b258.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>

  </head>
  <body>
    @include('layouts.header')

    <main>
      <form action="/updatePF" id="add-pet-form" class="container" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="usernameh" value="{{ $username }}">
        <input type="hidden" name="nicknameh" value="{{ $nickname }}">
        <div id="pet-details">
          <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type">
              <option value="cat">Cat</option>
              <option value="dog">Dog</option>
              <option value="bird">Bird</option>
            </select>
          </div>

          <div class="form-group">
            <label for="breed">Breed</label>
            <input type="text" name="breed" id="breed" class="form-control" />
          </div>

          <div class="form-group">
            <label for="nickname">Nickname</label>
            <input type="text" name="nickname" id="nickname" class="form-control"/>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" />
          </div>

          <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <div class="form-group">
            <label for="group">Group</label>
            <select name="group" id="group">
              <option value="young">Young</option>
              <option value="adult">Adult</option>
              <option value="baby">Baby</option>
              <option value="senior">Senior</option>
            </select>
          </div>

          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" />
          </div>

          <div class="form-group">
            <label for="owner-msg">Owners Message</label>
            <textarea name="owner_msg" id="owner_msg" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </div>

        <div id="training-details">
          <div class="form-group">
            <p id="training1">Training</p>

            <label for="basic_trained">Basic Trained</label>
            <input type="radio" name="training" value="basic_trained" />
            </label>

            <label for="well_trained">Well Trained
            <input type="radio" name="training" value="well_trained" />
            </label>

            <label for="need_training">Needs Training
            <input type="radio" name="training" value="need_training" />
            </label>
          </div>

          <div class="form-group">
            <p id="vaccination1">Vaccinated</p>
            <label for="vaccinated">Vaccinated
            <input type="radio" name="vaccination" value="vaccinated" />
            </label>

            <label for="not_vaccinated">Not Vaccinated
            <input type="radio" name="vaccination" value="not-vaccinated" />
            </label>
          </div>

          <div class="form-group">
            <p id="behaviour1">Behaviour</p>
            <label for="energetic"
              >Energetic
              <input type="radio" name="behaviour" value="energetic" />
            </label>

            <label for="playful"
              >Playful
              <input type="radio" name="behaviour" value="playful" />
            </label>

            <label for="loving"
              >Loving
              <input type="radio" name="behaviour" value="loving" />
            </label>
            <label for="gentle"
              >Gentle
              <input type="radio" name="behaviour" value="gentle" />
            </label>
            <label for="protective"
              >Protective
              <input type="radio" name="behaviour" value="protective" />
            </label>
          </div>
        </div>

      <div class="show">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                <div class="show_page text_align_center">
                    <h5>Featured Image</h5>
                    <h6>Format: PNG,JPG,JPEG ,Max File Size: 5MB</h6>
                    <input type="file" name="fileInput" />
                    <br><br>
                </div>
              </div>
          </div>
        </div>
      </div>

        <button type="submit" id="submit" class="btn btn-success">
          Update
        </button>
      </form>
    </main>

    @include('layouts.footer')

    <!-- <script>
      
      form.addEventListener('submit', (e)=> {
        e.preventDefault();

        let form = document.querySelector('#add-pet-form');
        form.action = "/add/blog1.jpg";

        e.target.submit();
      
      });
      function handleFileSelect(event){
        const files = event.target.files;
        for(let i =0; i<files.length;i++){
          console.log("File name: ", files[i].name);
          console.log("File type: ", files[i].type);
          console.log("File size: ", files[i].size);

        }
      }

    </script> -->
  </body>
</html>