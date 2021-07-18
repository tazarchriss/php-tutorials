<?php
 include_once 'db.php';
    $result=mysqli_query($conn,"SELECT * FROM empoyee");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    if (mysqli_num_rows($result)>0) {
    ?>
    <table>
        <tr>
            <td>SI No</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City</td>
            <td>Email Id</td>
           
        </tr>
            <?php
             $i=0;
             while($row=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["userid"];?></td>
            <td><?php echo $row["first_name"];?></td>
            <td><?php echo $row["last_name"];?></td>
            <td><?php echo $row["city_name"];?></td>
            <td><?php echo $row["email"];?></td>
           
        </tr>
        <?php
            $i++;
             }
             ?>
    </table>
    <?php
    }
    else{
        echo 'No records were found';
    }
    ?>
</body>
</html>
