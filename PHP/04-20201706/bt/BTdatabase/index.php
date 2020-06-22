<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
 <?php
    $servername ="localhost";
    $username ="root";
    $passwword ="";

    $connect = mysqli_connect($servername,$username,$passwword);
    if(!$connect){
        die("Đăng nhập thất bại:".mysqli_connect_error() );
    } 
    echo "Đăng nhập thành công"."<br>";
?>
<?php
    $sql ="create database Aptech_PHP23";
    if(mysqli_query($connect,$sql)){
        echo "Tạo database thành công:";
    }else{
        echo "Tạo database không thành công:".mysqli_error($connect);
    }
    mysqli_close($connect);
  ?>






  <form action="users.php" method="POST">
  Name <br><input type="text" name ="ten" placeholder="Name">.<br>
  Email <br> <input type ="email" name ="email" placeholder="Email">.<br>
  Password <br> <input type ="password" name ="password" placeholder="Password">.<br>
  <input type ="submit" name ="submit" value="CONFIRM">.<br>
  </form>
  <?php 
   /* if(isset($_POST["submid"])){
        if($_POST["ten"])==null or $_POST["email"]==null){
            echo "Không đăng ký thành công";
        }
    }*/
  ?>

</body>
</html>