<?php
session_start();
$id = $_SESSION["adminid"]; // Get session variable
if (isset($id)) {
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
      background-color: #495057;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
    h2 {
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }
    .card {
      background-color: #6c757d;
      border: none;
      margin-top: 20px;
    }
    .card-body {
      padding: 15px;
    }
    .form-control-plaintext {
      color: #fff;
    }
    .alert {
      background-color: #ff6f61;
      color: #fff;
      border: none;
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

  <title>Admin Film Festival 2024</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
  <div class="hero_area">
    <!-- header section starts -->
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="checkin.php"> TICKET </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="view.php"> VIEW</a>
                </li>
                <li class="nav-item active">
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
    <section class="us_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Delete Participant
          </h2>
        </div>
        <form method="post" action="delete.php" class="mb-4">
            <div class="form-group">
                <label for="stud_id">Student ID:</label>
                <input type="text" id="stud_id" name="stud_id" class="form-control" required>
            </div>
            <div class="text-center">
                <input type="submit" name="search" value="Search" class="btn btn-primary">
            </div>
        </form>

        <?php
          include 'php/config.php';

          if (isset($_POST['search'])) {
            $stud_id = $_POST['stud_id'];

            $query = "SELECT * FROM participant WHERE stud_id='$stud_id'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
        ?>

        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Participant Information</h2>
            <form method="post" action="">
                <div class="form-group">
                  <label for="stud_id">Student ID:</label>
                  <input type="text" id="stud_id" name="stud_id" class="form-control-plaintext" value="<?php echo $row['stud_id']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" class="form-control-plaintext" value="<?php echo $row['email']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" class="form-control-plaintext" value="<?php echo $row['name']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="p_num">Phone Number:</label>
                  <input type="text" id="p_num" name="p_num" class="form-control-plaintext" value="<?php echo $row['p_num']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password" class="form-control-plaintext" value="<?php echo $row['password']; ?>" readonly>
                </div>
                <div class="text-center">
                  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </div>
              </form>
            </div>
          </div>

        <?php
            } else {
              echo "<div class='alert alert-danger' role='alert'>No participant found with the provided ID.</div>";
            }
          }

          if (isset($_POST['delete'])) {
            $stud_id = $_POST['stud_id'];

            $delete_query = "DELETE FROM participant WHERE stud_id='$stud_id'";

            if (mysqli_query($conn, $delete_query)) {
              echo "<div class='alert alert-success' role='alert'>Participant deleted successfully.</div>";
            } else {
              echo "<div class='alert alert-danger' role='alert'>Error deleting record: " . mysqli_error($conn) . "</div>";
            }
          }

          mysqli_close($conn);
        ?>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Back to Index</a>
        </div>
      </div>
      <!-- Bootstrap JS and dependencies -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
    </section>

    <!-- end us section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>

<?php
} else {
  echo "<h1>No session exists or session is expired. Please log in again</h1>";
  echo "<html><body>";
  echo "<script type='text/javascript'>
         setTimeout(function() {
             window.location.href = '../login-html/index.html';
         }, 1000);
       </script>";
  echo "</body></html>";
}
?>
