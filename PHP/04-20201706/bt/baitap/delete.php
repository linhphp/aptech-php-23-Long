<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $table = "Aptech_PHP23";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $table);
 // Check connection
 if (!$conn) {
 die("Đăng nhập thành công: " . mysqli_connect_error());
 }
 //$sql = "delete from $table.users where name='$name'";
?>