<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $limit = intval($_POST["limit"]);

    // Save the limit to a file
    file_put_contents("entry_limit.txt", $limit);

    echo "Entry limit set to " . $limit;
    echo "<html><body>";
    echo "<script type='text/javascript'>
            setTimeout(function() 
            {
                window.location.href = '../view.php';
            }, 3000);
        </script>";
    echo "</body></html>";
}
?>
