<?php
    $servername = "db";
    $database = "db_covid19";
    $username = "root";
    $password = "my_secret_pw_shh";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }




    /* echo "Connected successfully";
    mysqli_close($conn); 
    exit; */
?>