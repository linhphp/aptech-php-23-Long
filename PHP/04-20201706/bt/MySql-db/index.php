<?php
$servername ="localhost";
$username ="root";
$password ="";

$long = mysqli_connect($servername,$username,$password);
if(!$long){
    die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully"."<br>";

$sql ="create database PHP_237";
if (mysqli_query($long,$sql)){
    echo "Database created successfully";
} else {
    echo "Error creating database:". mysqli_error($long);
}
mysqli_close($long);


?>
