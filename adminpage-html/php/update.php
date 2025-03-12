<?php

session_start();
$id=$_SESSION["adminid"]; //pass value $_SESSION variable to variable $id to display

$con=mysqli_connect("localhost", "root","","film_festival") or die("Cannot connect to server.".mysqli_error($con));

$name=$_POST["name"];
$email=$_POST["email"];
$p_num=$_POST["phone"];
$password=$_POST["password"];

$update_sql="UPDATE admin SET password = '$password', name = '$name', p_num = '$p_num' WHERE admin_id = '$id'";

$sql_result=mysqli_query($con,$update_sql);

if($sql_result)
{
  echo "<h1>Succesfully update the data.</h1>";
 echo "<html><body>";
 echo "<script type='text/javascript'>
         setTimeout(function() 
         {
             window.location.href = '../profile.php';
         }, 1000);
       </script>";
 echo "</body></html>";
}
else
{
  echo "<h1>Error in updating the data</h1>";
  echo "<html><body>";
  echo "<script type='text/javascript'>
          setTimeout(function() 
          {
              window.location.href = '../profile.php';
          }, 1000);
        </script>";
  echo "</body></html>";
}
?>
