<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Include the database configuration file
    include 'config.php'; // Adjust the path to your configuration file if needed

    $name = $_POST['name'];
    $admin_id = $_POST['admin_id'];
    $email = $_POST['email'];
    $p_num = $_POST['p_num'];
    $password = $_POST['password'];

    // Insert admin details into the database
    $sql = "INSERT INTO admin (admin_id, name, email, p_num, password) VALUES ('$admin_id', '$name', '$email', '$p_num', '$password')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "<script>alert('New admin added successfully!');</script>";
        echo "<html><body>";
        echo "<script type='text/javascript'>
                setTimeout(function() 
                {
                    window.location.href = '../add.php';
                }, 1000);
            </script>";
        echo "</body></html>";
    } 
    else 
    {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>