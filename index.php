<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <title>Maniten Project</title>
    <link rel="stylesheet" href="style.css">
    <style>
    .center {
        padding: 50px;
    }

    #bg1 {
        background: url('images/office7.jpg') no-repeat center center fixed;
        background-size: cover;
        background-color: #cccccc;
        padding: 70px;
        text-align: center;
    }

    li {
        font-size: 15px;
    }

    .card-img-top {
        width: 100%;
    }

    .card {
        background-color: white;
        margin: 5px;
    }

    #bckgrd {
        background-color: grey;
    }

    .bg-6 {
        padding-bottom: 90px;
    }

    .m-5 {
        margin: 80px;
    }

    .junk {
        margin-top: 300px;
        margin-bottom: 30px;
    }

    .what {
        margin-bottom: 30px;
    }

    .over:hover {
        opacity: 0.3;
    }

    .team1,
    .team2,
    .team3 {
        margin-bottom: 70px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <li  class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="about.php">About</a></li>
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
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="https://source.unsplash.com/3IEZsaXmzzs/1500x1200" alt="..." class="img-responsive">
                <div class="carousel-caption">
                    Caption 1
                </div>
            </div>
            <div class="item">
                <img src="https://source.unsplash.com/z55CR_d0ayg/1500x1200" alt="..." class="img-responsive">
                <div class="carousel-caption">
                    caption 2
                </div>
            </div>
            <div class="item">
                <img src="https://source.unsplash.com/3IEZsaXmzzs/1500x1200" alt="..." class="img-responsive">
                <div class="carousel-caption">
                    caption 3
                </div>
            </div>
            <div class="item">
                <img src="https://source.unsplash.com/z55CR_d0ayg/1500x1200" alt="..." class="img-responsive">
                <div class="carousel-caption">
                    caption 4
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container text-center center">
        <div class="col-xs-12 col-lg-6">
            <div class="col-lg-6 col-sm-6 col-xs-12  bank1">
                <img src="images/bank1.jpg">
                <p class="title-cls">title</p>
                <p>something here</p>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12  bank2">
                <img src="images/bank2.png">
                <p class="title-cls">title</p>
                <p>something here</p>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="col-lg-6 col-sm-6 col-xs-12  bank3">
                <img src="images/bank1.jpg">
                <p class="title-cls">title</p>
                <p>something here</p>
            </div>

            <div class="col-lg-6 col-sm-6 col-xs-12  bank4">
                <img src="images/bank2.png">
                <p class="title-cls">title</p>
                <p>something here</p>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" id="Team">
        <!-- Start Team Jumbotron -->
        <div class="container">
            <!-- Start Team Container -->
            <h2 class="text-center">About Us</h2>
            <hr style="height:3px;color:gray;width:3%;margin-left:49%;background-color:blue">
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuxsod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris.</p>
            <div class="row mt-5">
                <!-- Start Team Row-->

                <div class="col-xs-12 col-md-4 team1">
                    <!-- Start Team 1st Column-->
                    <div class="card">
                        <img class="card-img-top" src="images/office.jpg" style="border-bottom:3px solid blue;"
                            alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <p class="card-text" style="padding: 0px 20px;font-size: 20px;" >Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em"
                                    viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg> Go somewhere</a>
                        </div>
                    </div>
                </div> <!-- End Team 1st Column-->

                <div class="col-xs-12 col-md-4 team2">
                    <!-- Start Team 2nd Column-->
                    <div class="card">
                        <img class="card-img-top" src="images/office.jpg" style="border-bottom:3px solid blue;" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <p class="card-text" style="padding: 0px 20px;font-size:20px;"> aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident. Some quick example text to build on the card title
                                and make up the bulk of the card's content.</p>
                            <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em"
                                    viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg> Go somewhere</a>
                        </div>
                    </div>
                </div> <!-- End Team 2nd Column-->


                <div class="col-xs-12 col-md-4 team3">
                    <!-- Start Team 3rd Column-->
                    <div class="card">
                        <img class="card-img-top" src="images/office.jpg" style="border-bottom:3px solid blue;" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Card title</h3>
                            <p class="card-text" style="padding: 0px 20px;font-size:20px;">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em"
                                    viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg> Go somewhere</a>
                        </div>
                    </div>
                </div> <!-- End Team 3rd Column-->

            </div> <!-- End Team Row-->
            <!--second column-->
            <div class="col-xs-12 col-md-6">
                <div class="container">
                    <h2>Carousel Example</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="bottom: -5em;">
                            <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color:blue"
                                ;></li>
                            <li data-target="#myCarousel" data-slide-to="1" style="background-color:blue" ;></li>
                            <li data-target="#myCarousel" data-slide-to="2" style="background-color:blue" ;></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out
                                    print, graphic or web designs. The passage is attributed to an unknown typesetter in
                                    the 15th century who is thought to have scrambled parts of Cicero's De Finibus
                                    Bonorum et Malorum for use in a type specimen book.<p>
                            </div>

                            <div class="item">
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out
                                    print, graphic or web designs. The passage is attributed to an unknown typesetter in
                                    the 15th century who is thought to have scrambled parts of Cicero's De Finibus
                                    Bonorum et Malorum for use in a type specimen book.<p>
                            </div>

                            <div class="item">
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out
                                    print, graphic or web designs. The passage is attributed to an unknown typesetter in
                                    the 15th century who is thought to have scrambled parts of Cicero's De Finibus
                                    Bonorum et Malorum for use in a type specimen book.<p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 men">
                <img src="images/men1.jpg" style="max-width: 100%; margin-top: 55px;">
            </div>
            <!--second column-->
        </div> <!-- End Team Container --><br>

    </div> <!-- End Team Jumbotron -->

    <div class="jumbotron bg-6" id="bckgrd">
        <div class="container text-center">
            <div class="row">
                <div class="">

                    <div id="imageCarouse3" class="carousel slide" data-interval="10000" data-ride="carouse3"
                        data-pause="hover" data-wrap="true">

                        <ol class="carousel-indicators" style="bottom: -5em;">
                            <li data-target="#imageCarouse3" data-slide-to="0" class="active"
                                style="background-color:blue;"></li>
                            <li data-target="#imageCarouse3" data-slide-to="1" style="background-color:blue;"></li>
                            <li data-target="#imageCarouse3" data-slide-to="2" style="background-color:blue;"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Desert</h3>
                                            <p>Desert Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Jellyfish</h3>
                                            <p>Jellyfish Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Penguins</h3>
                                            <p>Penguins Image Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Lighthouse</h3>
                                            <p>Lighthouse Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Hydrangeas</h3>
                                            <p>Hydrangeas Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Koala</h3>
                                            <p>Koala Image Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Tulips</h3>
                                            <p>Tulips Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Chrysanthemum</h3>
                                            <p>Chrysanthemum Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Stripes</h3>
                                            <p>Stripes Image Description</p>
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
    <div class="jumbotron bg-6">
        <div class="container text-center">
            <div class="row">
                  <div class="col-sm-12 col-md-12">
                    <div id="imageCarousel3" class="carousel slide" data-interval="10000" data-ride="carouse3"
                        data-pause="hover" data-wrap="true">

                        <ol class="carousel-indicators" style="bottom: -5em;">
                            <li data-target="#imageCarousel3" data-slide-to="0" class="active" style="background-color:blue;"></li>
                            <li data-target="#imageCarousel3" data-slide-to="1" style="background-color:blue;"></li>
                            <li data-target="#imageCarousel3" data-slide-to="2" style="background-color:blue;"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Desert</h3>
                                            <p>Desert Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Jellyfish</h3>
                                            <p>Jellyfish Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Penguins</h3>
                                            <p>Penguins Image Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive over">
                                        <div class="carousel-caption">
                                            <h3>Lighthouse</h3>
                                            <p>Lighthouse Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Hydrangeas</h3>
                                            <p>Hydrangeas Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Koala</h3>
                                            <p>Koala Image Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Tulips</h3>
                                            <p>Tulips Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 hidden-xs">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Chrysanthemum</h3>
                                            <p>Chrysanthemum Image Description</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="images/office4.jpg" class="img-responsive">
                                        <div class="carousel-caption">
                                            <h3>Stripes</h3>
                                            <p>Stripes Image Description</p>
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
            <div class="col-xs-12 col-md-10 col-centered">

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
    <div class="container-fluid" id="bg1">
        <div class="magic">
            <h1>Let’s Make Magic.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuxsod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            <button type="submit" style="border-radius:25px;">See features</button>
        </div>
    </div>
    <div class="container mb-4">
        <!-- Start Team Container -->
        <h2 class="text-center">Our Work</h2>
        <hr style="height:3px;color:gray;width:3%;margin-left:49%;background-color:blue">

        <div class="row mt-5">
            <!-- Start Team Row-->

            <div class="col-xs-12 col-md-4">
                <!-- Start Team 1st Column-->
                <div class="card">
                    <div class="container22">
                        <img src="images/office3.jpg" alt="Avatar" class="image22" style="width:250px">
                        <div class="overlay22">
                            <div class="text22">
                                <svg class="bi bi-plus" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- End Team 1st Column-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#">
                            <svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg> Go somewhere</a>
                    </div>
                </div> <!-- End Team Row-->
            </div> <!-- End Team Container -->

            <div class="col-xs-12 col-md-4">
                <!-- Start Team 2nd Column-->
                <div class="card">
                    <div class="container22">
                        <img src="images/office3.jpg" alt="Avatar" class="image22" style="width:250px">
                        <div class="overlay22">
                            <div class="text22">
                                <svg class="bi bi-plus" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- End Team 2nd Column-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#">
                            <svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg> Go somewhere</a>
                    </div>
                </div> <!-- End Team Row-->
            </div> <!-- End Team Container -->

            <div class="col-xs-12 col-md-4">
                <!-- Start Team 3rd Column-->
                <div class="card">
                    <div class="container22">
                        <img src="images/office3.jpg" alt="Avatar" class="image22" style="width:250px">
                        <div class="overlay22">
                            <div class="text22">
                                <svg class="bi bi-plus" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- End Team 3rd Column-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#">
                            <svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg> Go somewhere</a>
                    </div>
                </div> <!-- End Team Row-->
            </div> <!-- End Team Container -->
        </div> <!-- End Team Row-->
    </div> <!-- End Team Container -->

    <div class="container">
        <!-- Start Team Container -->
        <div class="row">
            <!-- Start Team Row-->
            <div class="col-xs-12 col-md-4">
                <!-- Start Team 4th Column-->
                <div class="card">
                    <div class="container22">
                        <img src="images/office3.jpg" alt="Avatar" class="image22" style="width:250px">
                        <div class="overlay22">
                            <div class="text22">
                                <svg class="bi bi-plus" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- End Team 4th Column-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#">
                            <svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg> Go somewhere</a>
                    </div>
                </div> <!-- End Team Row-->
            </div> <!-- End Team Container -->
            <div class="col-xs-12 col-md-4">
                <!-- Start Team 5th Column-->
                <div class="card">
                    <div class="container22">
                        <img src="images/office3.jpg" alt="Avatar" class="image22" style="width:250px">
                        <div class="overlay22">
                            <div class="text22">
                                <svg class="bi bi-plus" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- End Team 5th Column-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#">
                            <svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg> Go somewhere</a>
                    </div>
                </div> <!-- End Team Row-->
            </div> <!-- End Team Container -->


            <div class="col-xs-12 col-md-4">
                <!-- Start Team 6th Column-->
                <div class="card">
                    <div class="container22">
                        <img src="images/office3.jpg" alt="Avatar" class="image22" style="width:250px">
                        <div class="overlay22">
                            <div class="text22">
                                <svg class="bi bi-plus" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- End Team 6th Column-->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#">
                            <svg class="bi bi-arrow-right-circle" width="2em" height="1.5em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path fill-rule="evenodd"
                                    d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                            </svg> Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="text-center junk">
                <button type="submit" style="border-radius:25px;">See features</button>
            </div>
        </div> <!-- End Team Row-->
    </div> <!-- End Team Container -->
    <div class="jumbotron">
        <div class="container text-center">
            <div class="col-xs-12 col-md-4 para">
                <h3>Creating The Life You Love.</h3><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuxsod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-xs-12 col-md-4 para1">
                <h3>We’ll Help You Get There.</h3><br>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores.
                </p>
            </div>

            <div class="col-xs-12 col-md-4 para2">
                <h3>Planning For The Future.</h3><br>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                    provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                    fuga. Et harum quidem rerum facilis.</p>
            </div>
        </div>
    </div>
    <div class="container what">
        <!-- Start Team Container -->
        <h3 class="text-center">What We Do</h3>
        <hr style="height:3px;color:gray;width:3%;margin-left:49%;background-color:blue">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuxsod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</a></h2>
            <div class="row mt-5">
                <!-- Start Team Row-->

                <div class="col-xs-12 col-md-4 what1">
                    <!-- Start Team 2nd Column-->
                    <div class="card">
                        <div class="container1 card-img-top">
                            <img src="images/office.jpg" alt="Avatar" class="image11" style="width:250px">
                            <div class="middle1">
                                <div class="text1"><svg class="bi bi-bag" width="2em" height="2em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                                        <path
                                            d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em"
                                    viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg> Go somewhere</a>
                        </div>
                    </div>
                </div> <!-- End Team 1nd Column-->

                <div class="col-xs-12 col-md-4 what2">
                    <!-- Start Team 2nd Column-->
                    <div class="card">
                        <div class="container1 card-img-top">
                            <img src="images/office.jpg" alt="Avatar" class="image11" style="width:250px">
                            <div class="middle1">
                                <div class="text1"><svg class="bi bi-gear" width="2em" height="2em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                        <path fill-rule="evenodd"
                                            d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em"
                                    viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg> Go somewhere</a>
                        </div>
                    </div>
                </div> <!-- End Team 2nd Column-->


                <div class="col-xs-12 col-md-4 what3">
                    <!-- Start Team 2nd Column-->
                    <div class="card">
                        <div class="container1 card-img-top">
                            <img src="images/office.jpg" alt="Avatar" class="image11" style="width:250px">
                            <div class="middle1">
                                <div class="text1"><svg class="bi bi-laptop" width="3em" height="3em"
                                        viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z" />
                                        <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#"><svg class="bi bi-arrow-right-circle" width="2em" height="1.5em"
                                    viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                                </svg> Go somewhere</a>
                        </div>
                    </div>
                </div> <!-- End Team 3nd Column-->

            </div> <!-- End Team Row-->
            <!--second column-->


            <!--second column-->
    </div> <!-- End Team Container -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2 style="text-align:left;">Set Goals.<br>
                        Reach. Repeat.
                    </h2>
                    <p style="text-align:left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuxsod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                    <button type="submit" style="border-radius:25px;">Read More</button>
                </div>
                <div class="col-xs-12 col-md-6">
                    <video height="240" style="width:100%" controls>
                        <source src="video/1.webm" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>

    <script>
    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
        duration: 3000,
        origin: 'bottom'
    });
    sr.reveal('.bank1', {
        duration: 3000,
        origin: 'bottom',
        distance: '300px'
    });
    sr.reveal('.bank2', {
        duration: 3000,
        origin: 'bottom',
        distance: '300px',
    });
    sr.reveal('.bank3', {
        duration: 3000,
        origin: 'bottom',
        distance: '300px'
    });
    sr.reveal('.bank4', {
        duration: 3000,
        origin: 'bottom',
        distance: '300px',
    });
    sr.reveal('.team1', {
        duration: 4000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.5
    });
    sr.reveal('.team2', {
        duration: 5000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.5
    });
    sr.reveal('.team3', {
        duration: 6000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.5
    });
    sr.reveal('.men', {
        duration: 7000,
        origin: 'right',
        distance: '300px'
    });
    sr.reveal('.magic', {
        duration: 3000,
        origin: 'top',
        distance: '300px'
    });
    sr.reveal('.para', {
        duration: 3000,
        origin: 'bottom',
        distance: '300px'
    });
    sr.reveal('.para1', {
        duration: 4000,
        origin: 'bottom',
        distance: '300px'
    });
    sr.reveal('.para2', {
        duration: 5000,
        origin: 'bottom',
        distance: '300px'
    });
    sr.reveal('.what1', {
        duration: 3000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.5
    });
    sr.reveal('.what2', {
        duration: 4000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.5
    });
    sr.reveal('.what3', {
        duration: 5000,
        origin: 'bottom',
        distance: '300px',
        viewFactor: 0.5
    });
    sr.reveal('video', {
        duration: 5000,
        origin: 'right',
        distance: '300px',
        viewFactor: 0.5
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