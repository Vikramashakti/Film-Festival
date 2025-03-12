<?php
    session_start();
    $id=$_SESSION["userid"]; //pass value $_SESSION variable to variable $user to display

    $con=mysqli_connect("localhost", "root", "","film_festival") or die("Cannot connect to server.".mysqli_error($con));

    $movie=$_POST["movie"];
    $food=$_POST["food"];

    $sql = "INSERT INTO booking (stud_id, movie_id, food) VALUES ('$id', '$movie', '$food')";

    $result =mysqli_query($con,$sql) or die("Error in inserting data due to".mysql_error());

    if($result)
    {
        echo "Succesfully booked.";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = '../booking.php';
                }, 1000);
              </script>";
        echo "</body></html>";
    }
    else
    {
        echo "Error in booking, please contact admin";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = '../booking.php';
                }, 1000);
              </script>";
        echo "</body></html>";
    }
?>