<?php
    include_once'db.php';
    $sql="DELETE FROM empoyee WHERE userid='".$_GET["id"]."'";
    if(mysqli_query($conn,$sql)){
        echo "Record deleted successfully!";
    }else{
        echo "Error deleting record:".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>