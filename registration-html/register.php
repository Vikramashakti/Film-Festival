<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_festival";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Cannot connect to the server." . mysqli_error($conn));

$fullname = $_POST['fullname'];
$studentid = $_POST['studentid'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$count = "SELECT COUNT(*) as count FROM participant";
$count_result = $conn->query($count);
$row = $count_result->fetch_assoc();
$current_count = $row["count"];

// Get the limit from the file
$limit = intval(file_get_contents("../adminpage-html/php/entry_limit.txt"));

if ($current_count >= $limit) {
    echo "<h1>Entry limit reached. Cannot add more entries.</h1>";
    echo "<html><body>";
    echo "<script type='text/javascript'>
            setTimeout(function() 
            {
                window.location.href = 'registration.html';
            }, 1000);
        </script>";
    echo "</body></html>";
} else{

$check="SELECT * FROM participant WHERE stud_id='$studentid'";

$check_result=mysqli_query($conn, $check);

if(mysqli_num_rows($check_result)==0)
{
    $sql = "INSERT INTO participant VALUES ('$studentid','$fullname','$email','$phone','$password')";

    $sql_result = mysqli_query($conn, $sql) or die("Error in inserting the data due to: " . mysqli_error($conn));

    if ($sql_result) 
    {
        echo "<h1>Registration Successful!</h1>";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = '../login-html/index.html';
                }, 3000);
            </script>";
        echo "</body></html>";
    } 
    else 
    {
        echo "Error in inserting new data";
    }
}
else
{
    echo "<h1>Student ID already registered</h1>";
    echo "<html><body>";
    echo "<script type='text/javascript'>
            setTimeout(function() 
            {
                window.location.href = 'registration.html';
            }, 3000);
        </script>";
    echo "</body></html>";
}
}

?>
