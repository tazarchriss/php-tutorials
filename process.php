<?php
    include_once('db.php');
    if (isset($_POST['save'])) {
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $city_name=$_POST['city_name'];
        $email=$_POST['email'];

        // insertion sql script
        $sql="INSERT INTO `empoyee`( `first_name`, `last_name`, `city_name`, `email`) VALUES('$first_name','$last_name','$city_name','$email')";
        if (mysqli_query($conn,$sql)) {
            echo 'New record created successfully!';
        }else{
            echo "Error:".$sql."".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>