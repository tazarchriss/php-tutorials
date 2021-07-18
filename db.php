<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="crud";

    // create connection
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    // check connection
    if(!$conn) {
        die("connection failed:".mysqli_connect_error());
    }
    else{
        echo "connected";
    }

    ?>
    <br>