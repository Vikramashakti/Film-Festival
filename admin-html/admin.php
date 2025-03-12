<?php

    $con=mysqli_connect("localhost", "root", "","film_festival") or die("Cannot connect to server.".mysqli_error($con)); 

    $id=$_POST["StaffID"];
    $pass=$_POST["password"];

    $sql="SELECT * FROM admin WHERE admin_id='$id'";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==0)
    {
        echo "<h1>Admin ID is NOT Valid</h1>";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = 'AdminLoginPage.html';
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
            $_SESSION["adminid"]= $id;
            //go to admin.php page
            header("Location:../adminpage-html/index.php");
        }
        else
        {
            echo "Wrong Password";
            echo "<html><body>";
            echo "<script type='text/javascript'>
                    setTimeout(function() 
                    {
                        window.location.href = '../admin-html/AdminLoginPage.html';
                    }, 1000);
                </script>";
            echo "</body></html>";
        }
    }

?>