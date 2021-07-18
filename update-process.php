<?php
    include_once 'db.php';
    if(count($_POST)>0){
        $update="UPDATE empoyee set userid='".$_POST['userid']."',first_name='".$_POST['first_name']."',last_name='".$_POST['last_name']."',city_name='".$_POST['city_name']."',email='".$_POST['email']."' WHERE userid='".$_POST['userid']."'";
        mysqli_query($conn,$update);
        $message="Record Modified Successfully";
    }
    $select="SELECT * FROM empoyee WHERE userid='".$_GET['id']."'";
    $result=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($result);
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
        <form name="frmUser" method="POST" action="">
            <div><?php if(isset($message)){echo $message;}?>
        </div>
            <div style="padding: bottom 5px;">
            <a href="retrieve.php">Employee List</a>
        </div>
        Username <br>
        <input type="hidden" name="userid" value="<?php echo $row['userid'];?>">
        <input type="text" name="userid" value="<?php echo $row['userid'];?>">
        <br>
        First Name: <br>
        <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" >
        <br>
        Last Name: <br>
        <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" >
        <br>
        City: <br>
        <input type="text" name="city_name" value="<?php echo $row['city_name'];?>" >
        <br>
        Email: <br>
        <input type="text" name="email" value="<?php echo $row['email'];?>" >
        <br>
        <input type="submit" value="submit" name="submit">
        </form>
    </body>
    </html>