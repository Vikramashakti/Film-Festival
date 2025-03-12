<?php
//call this function to check if session is exists or not
session_start();
$id=$_SESSION["adminid"]; //pass value $_SESSION variable to variable $id to display
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

  <title>Admin Film Festival 2024</title>

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
              Admin View Film Festival 2024
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
                  <a class="nav-link" href="checkin.php"> TICKET </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view.php"> VIEW</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="delete.php"> DELETE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="search.php"> SEARCH</a>
                </li>
              </ul>
              <div class="dropdownprofile">
                <button><img src="images/profile.png" width="30" alt=""></button>
                <div class="content">
                  <a href="profile.php">My Profile</a>
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
  <br><br>

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Admin Functions
        </h2>
      </div>

      <div class="us_container ">
        <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <a href="checkin.php">
                  <img src="images/adminadd.png" width="80" alt="film_icon">
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  TICKET ADMISSION
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <a href="view.php">
                  <img src="images/viewuser.png" width="110" alt="dolby_icon">
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  VIEW PARTICIPANT
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <a href="delete.php">
                  <img src="images/deleteuser.png" width="80" alt="price_icon">
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  DELETE PARTICIPANT
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box">
              <div class="img-box">
                <a href="search.php">
                  <img src="images/searchuser.png" alt="time_icon">
                </a>
              </div>
              <div class="detail-box">
                <h5>
                  SEARCH PARTICIPANT
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container">
    <h2>Quick-Add Admin</h2>
    <form action="index.php" method="post">
      <div class="form-group">
        <label for="admin_id">Admin ID:</label>
        <input type="text" class="form-control" id="admin_id" name="admin_id" required>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="p_num">Phone Number:</label>
        <input type="text" class="form-control" id="p_num" name="p_num" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Add Admin</button>
    </form>
    <br>
    <a href="index.php" class="btn btn-secondary">Back to Admin page</a>
  </div>
  </section>


  <!-- end us section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database configuration file
    include 'php/config.php'; // Adjust the path to your configuration file if needed

    $name = $_POST['name'];
    $admin_id = $_POST['admin_id'];
    $email = $_POST['email'];
    $p_num = $_POST['p_num'];
    $password = $_POST['password'];

    // Insert admin details into the database
    $sql = "INSERT INTO admin (admin_id, name, email, p_num, password) VALUES ('$admin_id', '$name', '$email', '$p_num', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New admin added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
}
else
{
  echo "<h1>No session exist or session is expired. Please log in again</h1>";
  echo "<html><body>";
  echo "<script type='text/javascript'>
         setTimeout(function() 
         {
             window.location.href = '../admin-html/AdminLoginPage.html';
         }, 1000);
       </script>";
  echo "</body></html>";
}
?> 