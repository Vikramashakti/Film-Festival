<?php
    include_once 'config.php';

    if (isset($_GET['bookingid'])) 
    {
        $booking_id = $_GET['bookingid'];
    }

    $sql="DELETE FROM booking WHERE booking_id_id='$booking_id'";

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        echo "<h1>You have successfully deleted participant.</h1>";
        echo "<script type='text/javascript'>
                    setTimeout(function() 
                    {
                        window.location.href = '../view.php';
                    }, 1000);
                </script>";
    }
    else
    {
        echo "<h1>Error in deleting participant.</h1>";
        echo "<script type='text/javascript'>
                    setTimeout(function() 
                    {
                        window.location.href = '../view.php';
                    }, 1000);
                </script>";
    }
?>