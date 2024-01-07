<?php
    // Create connection
    $con =mysqli_connect("localhost","root","","10122023");
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    //require("../index.php");
?>