<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="PHP_237";

$long = mysqli_connect($servername,$username,$password,$dbname);
if(!$long){
    die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully"."<br>";

$table = "insert into $dbname.users(
    name,email)
    values('Long','long@gmail.com');";
$table.= "insert into $dbname.users(
    name,email)    
    values ('Thành','Thanh@gmail.com');";
$table.= "inser into $dbname.users(
    name,email)
    values('Hùng','hung@gmail.com')";    
    

if (mysqli_multi_query($long,$table)) {
    echo "new created successfully";
} else {
    echo "error insert table".$table . mysqli_error($long);
}
mysqli_close($long);
