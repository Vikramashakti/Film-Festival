<?php

    $con=mysqli_connect("localhost", "root", "","film_festival") or die("Cannot connect to server.".mysqli_error($con)); 

    $id=$_POST["id"];
    $pass=$_POST["password"];

    $sql="SELECT * FROM participant WHERE stud_id='$id'";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==0)
    {
        echo "<h1>Student ID is NOT Valid</h1>";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = 'index.html';
                }, 1000);
            </script>";
        echo "</body></html>";
    }
    else
    {
        $row=mysqli_fetch_array($result,MYSQLI_BOTH);

        if($row["password"]==$pass)
        {
            session_start();
            $_SESSION["userid"]= $id;
            //go to admin.php page
            header("Location:../filmfestival-html/index.php");
        }
        else
        {
            echo "Wrong Password";
            echo "<html><body>";
            echo "<script type='text/javascript'>
                    setTimeout(function() 
                    {
                        window.location.href = 'index.html';
                    }, 1000);
                </script>";
            echo "</body></html>";
        }
    }

?>