<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <title>Maniten Project</title>
  <link rel="stylesheet" href="style.css">
  <style>
    #showcase h1 {
      font-size: 50px;
      margin-bottom: 20px;
    }

    #showcase img {
      width: 100%;

    }

    #showcase .showcase-right {
      margin-top: 90px;
    }

    .fakeimg {
      background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
      background-size: cover;
      height: 400px;
      width: 100%;
      margin-bottom: 40px;
    }

    .bg4 {
      background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
      background-size: cover;
      height: 600px;
      width: 109%;
      opacity: 0.7;
    }

    p {
      color: black;
    }

    li {
      font-size: 15px;
    }

    .card {
      background-color: white;
      padding: 20px;
    }

    h1,
    .text-center {
      color: white;
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .carousel-img {
      width: 100vw;
      height: 100vh;
    }

    i {
      padding: 5px;
      color: black;
    }

    .mb-2 {
      margin-top: 100px;
      margin-bottom: 30px;
    }

    .talk1 {
      margin-top: 60px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="about.php">About<span class="sr-only">(current)</span></a></li>
          <li><a href="services.php">Service</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Apply Here
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>

    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid">
    <div class="row bg4">
      <div class="centered text-center">
        <h1>Services</h1>
        <hr style="height:5px;width:35%;margin-left:35%;background-color:blue">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button type="submit" style="border-radius:25px;">Read More</button>
      </div>
    </div>
  </div>

  <section id="showcase">
    <div class="container laptop">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="showcase-left">
            <img src="images/laptop2.jpg">
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="showcase-right">
            <h2>Hands-free help from the Google Assistant</h2>
            <p>Google Home voice-activated speaker.consectetur adipisicing elit, sed do eiuxsod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          </div>
          <br>
          <a class="btn btn-default btn-lg showcase-btn">Read More</a>
        </div>
      </div>
    </div>
  </section>
  <div class="jumbotron">
    <!-- Start Team Jumbotron -->
    <div class="container">
      <!-- Start Team Container -->
      <div class="row" id="Team">
        <!-- Start Team Row-->
        <div class="col-md-3 col-sm-12">
          <!-- Start Team 4th Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
          </div>
        </div> <!-- End Team 1st Column-->

        <div class="col-md-3 col-sm-12">
          <!-- Start Team 2nd Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Shinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
          </div>
        </div> <!-- End Team 2nd Column-->

        <div class="col-md-3 col-sm-12">
          <!-- Start Team 3rd Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
          </div>
        </div> <!-- End Team 3rd Column-->

        <div class="col-md-3 col-sm-12">
          <!-- Start Team 4th Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
          </div>
        </div> <!-- End Team 4th Column-->
      </div> <!-- End Team Row-->
    </div> <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->
  <dic class="container-fluid">
    <div class="col-xs-12 fakeimg">
      <div class="centered text-center">
        <h1>Let's Make Magic</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button type="submit" style="border-radius:25px;">Button</button>
      </div>
    </div>
  </div>
  <div class="jumbotron">
    <div class="container text-center ">
      <h3 class=>Happy Customer</h3>
      <hr style="height:5px;width:3%;margin-left:48%;background-color:blue">
      <div class="row talk1">
        <div class="col-xs-12">

          <div id="imageCarousel" class="carousel slide" data-interval="5000" data-ride="carousel" data-pause="hover" data-wrap="true">

            <ol class="carousel-indicators" style="bottom: -5em;">
              <li data-target="#imageCarousel" style="background-color: blue;" data-slide-to="0" class="active"></li>
              <li data-target="#imageCarousel" style="background-color: blue;" data-slide-to="1"></li>
              <li data-target="#imageCarousel" style="background-color: blue;" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-md-4 col-xs-12">
                    <img src="images/men.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Desert</h3>
                      <p>Desert Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/men2.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Jellyfish</h3>
                      <p>Jellyfish Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/women.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Penguins</h3>
                      <p>Penguins Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/women6.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Penguins</h3>
                      <p>Penguins Image Description</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-xs-12">
                    <img src="images/women.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Desert</h3>
                      <p>Desert Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/men.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Jellyfish</h3>
                      <p>Jellyfish Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/women6.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Penguins</h3>
                      <p>Penguins Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/men2.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Penguins</h3>
                      <p>Penguins Image Description</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-md-3 col-xs-12">
                    <img src="images/men2.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Desert</h3>
                      <p>Desert Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/women6.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Jellyfish</h3>
                      <p>Jellyfish Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/men.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Penguins</h3>
                      <p>Penguins Image Description</p>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-12">
                    <img src="images/women.jpg" class="img-responsive talk">
                    <div class="carousel-caption">
                      <h3>Penguins</h3>
                      <p>Penguins Image Description</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
	<div class="row">
		<div class="col-xs-3 col-md-10 col-centered">

			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
				<div class="carousel-inner">
					<div class="item active">
						<div class="carousel-col">
            <img src="images/wordpress.png"> 
						</div>
					</div>
					<div class="item">
						<div class="carousel-col">
            <img src="images/wordpress2.png"> 
						</div>
					</div>
					<div class="item">
						<div class="carousel-col">
            <img src="images/wordpress3.png"> 
						</div>
					</div>
					<div class="item">
						<div class="carousel-col">
						<img src="images/wordpress4.png"> 
						</div>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>


  <?php include('footer.php') ?>
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
      duration: 3000,
      origin: 'bottom'
    });
    sr.reveal('.showcase-left', {
      duration: 3000,
      origin: 'left',
      distance: '300px'
    });
    sr.reveal('.magic', {
      duration: 3000,
      origin: 'top',
      distance: '300px'
    });
  </script>
   <script>
    $('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
  </script>

</body>

</html>