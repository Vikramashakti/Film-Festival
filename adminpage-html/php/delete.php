<?php
    include_once 'config.php';

    if (isset($_GET['studid'])) 
    {
        $stud_id = $_GET['studid'];
    }

    $sql="DELETE FROM participant WHERE stud_id='$stud_id'";

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