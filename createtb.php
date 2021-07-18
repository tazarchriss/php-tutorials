<?php
// CREATING TABLE
 require_once('db.php');

//sql query to create table
$sql="CREATE TABLE Student(ID int NOT NULL AUTO_INCREMENT,FirstName varchar(50),LastName varchar(50),RollNo varchar(50),City varchar(50),PRIMARY KEY(ID))";

if (mysqli_connect($conn,$sql)) {
    echo 'table student successfully created';
}
else{
    echo "Error creating Table".mysqli_error($conn);
}
mysqli_close();
?>