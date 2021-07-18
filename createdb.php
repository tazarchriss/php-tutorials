
<?php
     require_once('db.php');   
    // creating database
    $sql="CREATE DATABASE admin";
    if (mysqli_query($conn,$sql)){
        echo 'Database admin created successfully';
    }
    else {
        echo 'Error creating database:'.mysqli_error($conn);
    }
    mysqli_close($conn);
?>