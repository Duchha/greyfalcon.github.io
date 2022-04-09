  <!DOCTYPE html>
  <html lang="en">
  <head>

    <title>Grey Falcon</title>
    <link rel="shortcut icon" href="icon.ico" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
    }
    p {font-size: 16px;}
    .margin {margin-bottom: 45px;}
    .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
    }
    .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
    }
    .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
    }
    .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
    }
    .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
    }
    .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
    }

    .navbar-nav  li a:hover {
      color: #1abc9c !important;
    }
    </style>
  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Grey Falcon</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="register.php">REGISTER</a></li>
          <li><a href="#">LOGIN</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- First Container -->
<div class="Container-fl">
  <video width="100%" src="flight1.mp4" muted loop autoplay></video>
</div>

<!-- <div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="grey.jpg" class="img-responsive" style="display:inline" alt="Bird">
  <h3>I'm an adventurer</h3>
</div> -->

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What Am I?</h3>
  <h4>Falcons are birds of prey in the genus Falco, which includes about 40 species. Falcons are widely distributed on all continents of the world except Antarctica, though closely related raptors did occur there in the Eocene.

Adult falcons have thin, tapered wings, which enable them to fly at high speed and change direction rapidly. Fledgling falcons, in their first year of flying, have longer flight feathers, which make their configuration more like that of a general-purpose bird such as a broad wing. This makes flying easier while learning the exceptional skills required to be effective hunters as adults.

The falcons are the largest genus in the Falconinae subfamily of Falconidae, which itself also includes another subfamily comprising caracaras and a few other species. All these birds kill with their beaks, using a "tooth" on the side of their beaks—unlike the hawks, eagles, and other birds of prey in the Accipitridae, which use their feet.

The largest falcon is the gyrfalcon at up to 65 cm in length. The smallest falcon species is the Pygmy falcon which measures just 20 cm. As with hawks and owls, falcons exhibit sexual dimorphism, with the females typically larger than the males, thus allowing a wider range of prey species.

Some small falcons with long, narrow wings are called "hobbies" and some which hover while hunting are called "kestrels".

As is the case with many birds of prey, falcons have exceptional powers of vision; the visual acuity of one species has been measured at 2.6 times that of a normal human Peregrine falcons have been recorded diving at speeds of 320 km/h (200 mph), making them the fastest-moving creatures on Earth; the fastest recorded dive attained a vertical speed of 390 km/h (240 mph). </h4>
  <a href="https://en.wikipedia.org/wiki/Falcon" target="_blank" rel="noopener noreferrer" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Research
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
  <h3 class="margin">What i do?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <b>Bird-on-Bird Defense</b>
      <p>The earliest evidence of using trained birds of prey to clear the sky comes from a Scottish airbase in the late 1940s, when falconers deployed both peregrine falcons and gyrfalcons to chase away seagulls near the runway. The industry continued to stretch its wings over the following decades as a way for airports in Europe and North America to keep flight paths clear.</p>
      <img src="hunt.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <b>Nest in trees, utilising stick nests of other species.</b>
    </div>
    <div class="col-sm-4">
      <b>Helping Farmers Scare Away Pests</b>
      <p>The string of trial-and-error methods, with mixed results, has prompted some farmers to fight pests with birds. The concept turns to millions of years of natural predator-prey evolution and an ancient sport leveraging human and falcon cooperation. But the specialized field of falconry-based pest abatement for crop production is just beginning to hatch.</p>

      <img src="grape.jpg"  class="img-responsive margin" style="width:100%" alt="Image">
    </div>

  </div
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
<p>Created by Dušan Đokić</p>
<p>+381611791093</p>
</footer>

</body>
</html>
