<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "matrimonial";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);
    if (!$con) {
        echo "<h3>Connection Error:".mysqli_connect_error(). "</h3>";  
    }
    else {
    //    echo "Success". '<br>';
    }


?>