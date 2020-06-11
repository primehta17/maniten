<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .bg {
      background-color: rgb(192, 192, 192);
      background-size: cover;
      height: 100px;
      width: 109%;

    }

    i.fa {
      margin: 0.05em;
      font-size: 1.5em;
      color: white;
      border: 2px solid #303030;
      border-radius: 50%;
      padding: 0.05em;
      transition: all .5s ease;
    }

    i.fa:hover {
      color: lightblue;
      background-color: grey;
      border: 2px solid lightblue;
      cursor: pointer;
    }

    /*contact form*/

    input[type=text],
    input[type=email],
    #comment {
      background-color: #DCDCDC;
    }

    li {
      font-size: 15px;
    }
    p, label{
      font-size:20px;
    }
    /*contact form end*/
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
          <li><a href="services.php">Service</a></li>
          <li class="active"><a href="contact.php">Contact<span class="sr-only">(current)</span></a></li>
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
    <div class="row bg">
      <div class=""></div>
    </div>
  </div>
  <!-- <div class="container-fluid mb-4">
  <div class="row">
      <div id="googleMap" style="width:100%;height:400px;"></div>
  </div>
</div><br><br> --><br>
  <div class="container" id="formbg1"><br><br>
    <div class="col-md-4 col-sm-12"><br>
        <h3>Office Address</h3>
        <p style><a href="#" class="fa fa-envelope"></a> contact@gasagency.org.in</p>
        <p><a href="#" class="fa fa-phone"></a> +91-8535982342</p>
        <p><a href="#" class="fa fa-pen"></a> www.yourwebsite.com</p>
        <p><a href="#" class="fa fa-map-marker"></a> New Airport Link Rd, |, Andheri East, Mumbai, Maharashtra 400072</p>
        <hr>
        <div class="col-xs-6">
          <i class="fa fa-youtube" style="background-color: #b52626;"></i>
          <i class="fa fa-twitter" style="background-color: #56559c;"></i>
          <i class="fa fa-instagram" style="background-color: #bb7272;"></i>
        </div>
      </div>
      <div class="col-md-8 col-sm-12">
        <h3><br><br>Contact Details </h3>
        <form>
          <div class="form-row">
            <div class="form-group col-md-6 col-xs-12">
              <input type="text" class="form-control" id="first" placeholder="First Name*" required>
            </div>
            <div class="form-group col-md-6 col-xs-12">
              <input type="text" class="form-control" id="last" placeholder="Last Name*" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 col-xs-12">
              <input type="email" class="form-control" id="Email" placeholder="E-mail Address" required>
            </div>
            <div class="form-group col-md-6 col-xs-12">
              <input type="text" class="form-control" id="website" placeholder="Website">
            </div>
          </div>
          <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment" placeholder="Type Your Message" required></textarea>
          </div>
          <button type="submit" style="border-radius:25px;">Contact Us</button>
        </form><br>
      </div>
  </div>
  <?php include('footer.php') ?>
  <!--map  <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
 -->

</body>

</html>