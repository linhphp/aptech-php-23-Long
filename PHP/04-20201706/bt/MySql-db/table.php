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

$table = "create table $dbname.users(
    id int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name varchar(255),
     email varchar(255)
    
)";
if (mysqli_query($long,$table)) {
    echo "myTable created successfully";
} else {
    echo "error creating table" . mysqli_error($long);
}
mysqli_close($long);

