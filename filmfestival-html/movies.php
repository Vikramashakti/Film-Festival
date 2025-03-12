<?php
//call this function to check if session is exists or not
session_start();
$id=$_SESSION["userid"]; //pass value $_SESSION variable to variable $id to display
//if session is exists
if(isset ($id))
{ 
?> 

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Film Festival 2024</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="images/film.png" width="30" alt="imgicon">
              Film Festival 2024
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php"> About Us </a>
                </li>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="movies.php"> movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="booking.php"> Book Now</a>
                </li>
              </ul>
              <div class="dropdownprofile">
                <button><img src="images/profile.png" width="30" alt=""></button>
                <div class="content">
                  <a href="">My Profile</a>
                  <a href="mytickets.php">My Tickets</a>
                  <a href="php/logout.php">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Movie Lineup
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Godzilla vs Kong
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t1.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.rottentomatoes.com/m/godzilla_vs_kong" target="_blank">
                <img src="images/facebook-logo.png" width="25" alt="">
              </a>
              <a href="booking.php">
                <img src="images/ticket.png" width="50" alt="ticket">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Interstellar
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t2.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.rottentomatoes.com/m/interstellar_2014" target="_blank">
                <img src="images/facebook-logo.png" width="25" alt="">
              </a>
              <a href="booking.php">
                <img src="images/ticket.png" width="50" alt="ticket">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Avengers Endgame
              </h5>
            </div>
            <div class="img-box">
              <img src="images/t3.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.rottentomatoes.com/m/avengers_endgame" target="_blank">
                <img src="images/facebook-logo.png" width="25" alt="">
              </a>
              <a href="booking.php">
                <img src="images/ticket.png" width="50" alt="ticket">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto">
          <div class="box">
            <div class="name">
              <h5>
                Leo
              </h5>
            </div>
            <div class="img-box">
              <img src="images/leo.jpg" alt="">
            </div>
            <div class="social_box">
              <a href="https://www.rottentomatoes.com/m/leo_2023_2" target="_blank">
                <img src="images/facebook-logo.png" width="25" alt="">
              </a>
              <a href="booking.php">
                <img src="images/ticket.png" width="50" alt="ticket">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end trainer section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="https://maps.app.goo.gl/oGKoSa9X8nMqTMdC7" target="_blank">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
              </p>
            </div>
          </div>
        </a>
        <a href="tel:60169510118">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +60125299757
              </p>
            </div>
          </div>
        </a>
        <a href="mailto:vramaraj4@gmail.com">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Email
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; This event is bought to you by GROUP 1
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>

<?php
}
else
{
  echo "<h1>No session exist or session is expired. Please log in again</h1>";
  echo "<html><body>";
  echo "<script type='text/javascript'>
         setTimeout(function() 
         {
             window.location.href = '../login-html/index.html';
         }, 1000);
       </script>";
  echo "</body></html>";
}
?> 