<?php
session_start( );
if (isset($_SESSION["adminid"])) //userid replace with according to variable $_SESSION[xxx] at login page
{
session_destroy( );
echo "<h1>You have successfully logged out.</h1>";
echo "<script type='text/javascript'>
                    setTimeout(function() 
                    {
                        window.location.href = '../../admin-html/AdminLoginPage.html';
                    }, 1000);
                </script>";
}
else
{
    echo "<h1>No session exists or session is expired. Please log in again<h1>";
    echo "<script type='text/javascript'>
                    setTimeout(function() 
                    {
                        window.location.href = '../../admin-html/AdminLoginPage.html';
                    }, 1000);
                </script>";
}


?>