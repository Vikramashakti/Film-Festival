<?php

    $con=mysqli_connect("localhost", "root", "","film_festival") or die("Cannot connect to server.".mysqli_error($con)); 

    session_start();
    $id=$_SESSION["userid"]; //pass value $_SESSION variable to variable $id to display
    $message = $_POST["message"];

    $sql = "INSERT INTO complaints (stud_id, complaint) VALUES ('$id', '$message')";

    $sql_result =mysqli_query($con,$sql) or die("Error in inserting data due to".mysql_error());

    if($sql_result)
    {
        echo "Succesfully submitted inquiry.";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = '../index.php';
                }, 1000);
              </script>";
        echo "</body></html>";
    }
    else
    {
        echo "Error in submitting new inquiry";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = '../index.php';
                }, 1000);
              </script>";
        echo "</body></html>";
    }
?>



