<?php
include_once 'php/config.php';

// Function to get movie details by movie_id
function getMovieDetails($conn, $movie_id) {
    $sql = "SELECT * FROM movie WHERE movie_id = '$movie_id'";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}
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
<style>
    /* Basic table styling */
    table 
    {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td 
    {
      padding: 8px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th 
    {
      background-color: #8B0000;
    }

    tr
    {
      background-color: #FF474C;
    }

    /* Hover effect on table rows */
    tr:hover 
    {
      background-color: #ADD8E6;
    }

    /* Button styling */
    .button 
    {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      text-decoration: none;
      border-radius: 5px;
    }

    /* Center align the button */
    .button-container 
    {
      text-align: center;
      margin-top: 20px; /* Added margin for spacing */
    }
  </style>
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

<body>
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php"> About Us </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="movies.php"> Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="booking.php"> book now</a>
                </li>
              </ul>
              <div class="dropdownprofile">
                <button><img src="images/profile.png" width="30" alt=""></button>
                <div class="content">
                  <a href="profile.php">My Profile</a>
                  <a href="">My Tickets</a>
                  <a href="php/logout.php">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->


  <!-- Us section -->

  <section class="us_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            My Tickets
          </h2>
        </div>
        <br><br>
          <?php
            // SQL query to fetch all participants and their movie details
            $sql = "SELECT p.*, b.movie_id AS booking_movie_id, m.name AS movie_name, m.date AS movie_date, m.time AS movie_time, b.booking_id
                    FROM participant p
                    JOIN booking b ON p.stud_id = b.stud_id
                    JOIN movie m ON b.movie_id = m.movie_id
                    WHERE p.stud_id='$id'";
            $result = mysqli_query($conn, $sql);

            // Check if there are any participants
            if (mysqli_num_rows($result) > 0) 
            {
              // Display the table header
              echo "<table>";
              echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Movie Booked</th><th>Ticket</th></tr>";

              // Display each participant's data
              while ($row = mysqli_fetch_assoc($result)) 
              {
                echo "<tr>";
                echo "<td>" . $row['stud_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['p_num'] . "</td>";
                echo "<td>";

                $b_id=$row['booking_id'];

                // Display movie details
                echo "<a href='#' onclick='toggleMovieDetails(\"movieDetails{$row['booking_movie_id']}\")'>" . $row['booking_movie_id'] . "</a>";

                echo "</td>";
                echo "<td><a href='ticket.php?number={$b_id}' target='_blank'>View ticket</a></td>";
                echo "</tr>";

                // Hidden row for movie details
                echo "<tr id='movieDetails{$row['booking_movie_id']}' style='display:none;'><td colspan='5'>";
                echo "<table><tr><th>Movie ID</th><th>Name</th><th>Date</th><th>Time</th></tr>";
                echo "<tr><td>{$row['booking_movie_id']}</td><td>{$row['movie_name']}</td><td>{$row['movie_date']}</td><td>{$row['movie_time']}</td></tr>";
                echo "</table>";
                echo "</td></tr>";
              }

              // Close the table
              echo "</table>";

              // Display the back button
              echo "<div class='button-container'>";
              echo "<a href='index.php' class='button'>Back to Index</a>";
              echo "</div>";
            } 
            else 
            {
              echo "No tickets owned";
            }

            // Close the database connection
            mysqli_close($conn);
?>

<script>
    function toggleMovieDetails(movieId) {
        var movieDetailsRow = document.getElementById(movieId);
        if (movieDetailsRow.style.display === 'none') {
            movieDetailsRow.style.display = 'table-row';
        } else {
            movieDetailsRow.style.display = 'none';
        }
    }
</script>

        
      </div>
    </section>

  <!-- end us section -->

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