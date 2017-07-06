<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from paullaros.nl/material-blog-1-1/home-fashion.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2017 14:26:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="favicon.ico">-->

    <title>Visit Nepal to Revisit</title>

    <!-- Loading animation -->
    <script src="js/pace.min.js"></script>

    <!-- Bootstrap core CSS and Material Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-material-design.css')}}" rel="stylesheet">
    <link href="{{asset('css/ripples.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/material-scrolltop.css')}}" rel="stylesheet">
    <link href="{{asset('css/search.css')}}" rel="stylesheet">      
    <!-- Custom styles for this template -->
    <link href="{{asset('css/material-blog.css')}}" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="{{asset('css/font1.css')}}" rel="stylesheet">
    <link href="{{asset('css/font2.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-material-blog navbar-warning navbar-absolute-top navbar-overlay">

      <div class="navbar-image" style="background-image: url('img/gaurishankar.jpg');background-position: center 40%;"></div>

      <div class="navbar-wrapper container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><i class="material-icons">&#xE871;</i> Kathdevs</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <<li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Stories <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="home-fashion.html">Fashion</a></li>
                <li><a href="home-food.html">Food</a></li>
                <li><a href="home-music.html">Music</a></li>
                <li><a href="home-photography.html">Photography</a></li>
                <li><a href="home-technology.html">Technology</a></li>
                <li><a href="home-travel.html">Travel</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="filter-category.html">Cultural</a></li>
                <li><a href="filter-author.html">Religious</a></li>
                <li><a href="filter-date.html">Adventerus</a></li>
              </ul>
            </li>
           
            <li><a href="page-about.html">About</a></li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="login.html">Sign In</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
            <form class="searchForm collapsed" method="get" action="">              
              <input class="searchTerm"  placeholder="Search…" autocomplete="off"/>
              <input type="submit" class="searchBtn" value="GO"/>
            </form>
            </div>

          
      </div>
    </div>

    @yield('content')
    <button class="material-scrolltop warning" type="button"></button>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/material-scrolltop.js"></script>
    <script src="js/main.js"></script>

     <div class="blog-footer">
      <div class="container site-map">
          <div class="col-md-3 col-sm-6 col-xs-6">
              <h3>Places To See</h3>

              <div class="cato">
                  <ul>
                    <li><a href="PlacesInfo.html">Gokyo Valley</a></li>
                    <li><a href="PlacesInfo.html">Dolpa</a></li>
                    <li><a href="PlacesInfo.html">Lumbini, Nepal - Birthplace of Buddha </a></li>
                    <li><a href="PlacesInfo.html">Jomsom </a></li>
                    <li><a href="PlacesInfo.html">Kapan Monastery</a></li>
                    <li><a href="PlacesInfo.html">Palpa</a></li>
                    <li><a href="PlacesInfo.html">Tengboche </a></li>
                    <li><a href="PlacesInfo.html">Rara</a></li>
                    <li><a href="PlacesInfo.html">Bardiya</a></li>
                    <li><a href="PlacesInfo.html">Namche Bazaar</a></li>
                    <!--<li><a href="PlacesInfo.html">View All</a></li>-->
                  </ul>
              </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
              <h3>Things To Do</h3>

              <div class="cato">
                  <ul>
                    <li><a href="ThingsToDo.html">Adventure &amp; Mountaineering</a></li>
                    <li><a href="ThingsToDo.html">Nature</a></li>
                    <li><a href="ThingsToDo.html">Culture</a></li>
                    <li><a href="ThingsToDo.html">Spirituality and Pilgrimage</a></li>
                    <li><a href="ThingsToDo.html">Zip Flying</a></li>
                    <li><a href="ThingsToDo.html">Trekking</a></li>
                    <li><a href="ThingsToDo.html">Shopping</a></li>
                    <li><a href="ThingsToDo.html">Sky Diving</a></li>
                    <li><a href="ThingsToDo.html">Bird Watching</a></li>
                    <li><a href="ThingsToDo.html">Bungee Jumping</a></li>
                   <!-- <li><a href="https://www.welcomenepal.com/things-to-do.html">View All</a></li> -->
                  </ul>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
              <h3>Cultures</h3>

              <div class="cato">
                  <ul>
                    <li><a href="culture.html">Buddha Jayanti</a></li>
                    <li><a href="culture.html">Everest Day</a></li>
                    <li><a href="culture.html">Everest Marathon</a></li>
                    <li><a href="culture.html">Tiji</a></li>
                    <li><a href="culture.html">Himalayan Travel Mart 2017</a></li>
                    <li><a href="culture.html">Ropain </a></li>
                    <li><a href="culture.html">Janai Purnima</a></li>
                    <li><a href="culture.html">Gai Jatra</a></li>
                    <li><a href="culture.html">Krishna Ashtami</a></li>
                    <li><a href="culture.html">Kushe Aunsi</a></li>
                    <li><a href="culture.html">View All</a></li>

                  </ul>
              </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
              <h3>Plan Your Trip</h3>

              <div class="cato">
                  <ul>
                    <li><a href="trip-ideas.html">Trip Ideas</a></li>
                    <li><a href="about-nepal.html">About Nepal</a></li>
                    <li><a href="before-you-come.html">Before You Come</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/book-your-trip.html">Book Your Trip</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/history.html">History</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/geography.html">Geography</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/wildlife.html">Wildlife</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/climate.html">Climate</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/plants.html">Plants</a></li>
                    <li><a href="https://www.welcomenepal.com/plan-your-trip/people.html">People</a></li>
                    <!--<li><a href="https://www.welcomenepal.com/plan-your-trip.html">View All</a></li>-->
                </ul>
              </div>
          </div>
      </div>
     </div>


  <!--bottom footer-->
      <div id="bottom-footer" class="hidden-xs">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-left">
                &copy; All rights reserved
                              <div class="credits">
                                Designed by <a href="https://kathdevs.com/">Kathdevs</a>
                              </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="footer-right">
                              <ul class="list-unstyled list-inline pull-right">
                                  <li><a href="index.html">Home</a></li>
                                  <li><a href="page-about.html">About</a></li>
                                  <li><a href="page-contact.html">Contact</a></li>
                              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
          
</body>
</html>
