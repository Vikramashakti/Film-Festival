<?php
//call this function to check if session is exists or not
session_start();
$id=$_SESSION["userid"]; //pass value $_SESSION variable to variable $id to display

if (isset($_GET['number'])) 
{
    $bid = $_GET['number'];
}
include_once 'php/config.php';

$sql="SELECT * from booking WHERE booking_id='$bid'";

$result=mysqli_query($conn, $sql);

$row=mysqli_fetch_array($result,MYSQLI_BOTH);

$studid=$row["stud_id"];

$movieid=$row["movie_id"];

$food=$row["food"];

//if session is exists
if(isset ($id))
{
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ticket</title>
        <link rel="stylesheet" href="css/ticketstyle.css">
    </head>

    <body>
        <div class="container">
            <div class="card card-left">
                <h1>Film Festival <span>2024</span></h1>
                <div class="title">
                    <h2><?php echo $bid; ?></h2>
                    <span>booking id</span>
                </div>
                <div class="name">
                    <h2>
                    <?php
                    if($movieid=="gvk")
                    {
                        ?>
                                Godzilla vs Kong
                            </h2>
                            <span>movie name</span>
                        </div>
                        <div class="seat">
                            <h2><?php echo $food; ?></h2>
                            <span>food</span>
                        </div>
                        <div class="time">
                            <h2>2.30pm</h2>
                            <span>time</span>
                        </div>
                        </div>

                        <div class="card card-right">
                        <div class="eye"></div>
                            <div class="number">
                                <h3><?php echo $bid; ?></h3>
                                <span>ID</span>
                            </div>
                        </div>
                        </div>
                        <?php
                    }
                    else if($movieid=="ae")
                    {
                        ?>
                                Avengers Endgame
                            </h2>
                            <span>movie name</span>
                        </div>
                        <div class="seat">
                            <h2><?php echo $food; ?></h2>
                            <span>food</span>
                        </div>
                        <div class="time">
                            <h2>2.30pm</h2>
                            <span>time</span>
                        </div>
                        </div>

                        <div class="card card-right">
                        <div class="eye"></div>
                            <div class="number">
                                <h3><?php echo $bid; ?></h3>
                                <span>ID</span>
                            </div>
                        </div>
                        </div>
                        <?php
                    }
                    else if($movieid=="inter")
                    {
                        ?>
                                Interstellar
                            </h2>
                            <span>movie name</span>
                        </div>
                        <div class="seat">
                            <h2><?php echo $food; ?></h2>
                            <span>food</span>
                        </div>
                        <div class="time">
                            <h2>2.30pm</h2>
                            <span>time</span>
                        </div>
                        </div>

                        <div class="card card-right">
                        <div class="eye"></div>
                            <div class="number">
                                <h3><?php echo $bid; ?></h3>
                                <span>ID</span>
                            </div>
                        </div>
                        </div>
                        <?php
                    }
                    else if($movieid=="leo")
                    {
                        ?>
                                Leo
                            </h2>
                            <span>movie name</span>
                        </div>
                        <div class="seat">
                            <h2><?php echo $food; ?></h2>
                            <span>food</span>
                        </div>
                        <div class="time">
                            <h2>2.30pm</h2>
                            <span>time</span>
                        </div>
                        </div>

                        <div class="card card-right">
                        <div class="eye"></div>
                            <div class="number">
                                <h3><?php echo $bid; ?></h3>
                                <span>ID</span>
                            </div>
                        </div>
                        </div>
                        <?php
                    }
                    ?>
                    
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