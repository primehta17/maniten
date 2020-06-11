<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Services</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .bg {
      margin-top: 500px;
      margin-bottom: 50px;
    }

    .col-xs-7,
    .card {
      background-color: white;
      padding: 20px;
    }

    .bg5 {
      margin-top: 60px;
      margin-bottom: 60px;
    }

    li {
      font-size: 15px;
    }

    h1 {
      color: white;
    }
    .space{
      margin-top:500px;
      background-color:white;
    }
    .bg4 {
      background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
      background-size: cover;
      height: 600px;
      width: 103%;
      opacity: 0.7;
    }

    .centered {
      position: absolute;
      color: white;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
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
          <li><a href="about.php">About</a></li>
          <li class="active"><a href="services.php">Service<span class="sr-only">(current)</span></a></li>
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

  <div class="jumbotron" id="Team">
    <!-- Start Team Jumbotron -->
    <div class="container">
      <!-- Start Team Container -->
      <div class="row mt-5">
        <!-- Start Team Row-->
        <div class="col-md-3 col-xs-12">
          <!-- Start Team 4th Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                </svg> Learn More</a>
            </div>
          </div>
        </div> <!-- End Team 1st Column-->

        <div class="col-md-3 col-xs-12">
          <!-- Start Team 2nd Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Shinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                </svg> Learn More</a>
            </div>
          </div>
        </div> <!-- End Team 2nd Column-->

        <div class="col-md-3 col-xs-12">
          <!-- Start Team 3rd Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                </svg> Learn More</a>
            </div>
          </div>
        </div> <!-- End Team 3rd Column-->

        <div class="col-md-3 col-xs-12">
          <!-- Start Team 4th Column-->
          <div class="card shadow-xs mb-2">
            <div class="card-body text-center">
              <img src="images/office2.jpg" class="img-responsive" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
              <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                  <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                </svg> Learn More</a>
            </div>
          </div>
        </div> <!-- End Team 4th Column-->
      </div> <!-- End Team Row-->
    </div> <!-- End Team Container --><br>
    <h2 class="text-center">Welcome Our Site <a href="#">Learn More...</a></h2>
  </div> <!-- End Team Jumbotron -->
  <div class="conatiner-fuid space"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <div class="hovereffect">
          <img class="img-responsive" src="images/office.jpg" alt="">
          <div class="overlay">
            <h2>Acting in best interest</h2>
            <a class="info" href="#">link here</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="hovereffect">
          <img class="img-responsive" src="images/office2.jpg" alt="">
          <div class="overlay">
            <h2>Planning for future</h2>
            <a class="info" href="#">link here</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="hovereffect">
          <img class="img-responsive" src="images/office7.jpg" alt="">
          <div class="overlay">
            <h2>Customer Value Chain</h2>
            <a class="info" href="#">link here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-rocket" aria-hidden="true"></i> Finance</a></li>
            <li><a data-toggle="tab" href="#menu1"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Marketing</a></li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-bar-chart" aria-hidden="true"></i> Development</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3>Growing Your Dreams.</h3>
              <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
              <h3>Planning For The Future.</h3>
              <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem.</p>
            </div>
            <div id="menu2" class="tab-pane fade">
              <h3>The Next Big Thing.</h3>
              <p>Ntium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container bg5">
    <div class="row">
      <div class="col-md-4 col-xs-12"></div>

      <div class="col-md-8 col-xs-12">
        <h2>Set Goals. Reach. Repeat.</h2>
        <p style="font-size:20px;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuxsod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
        </p>
        <button type="submit" style="border-radius:25px;">Read More</button>
      </div>

    </div>
  </div>

  <?php include('footer.php') ?>
</body>

</html>