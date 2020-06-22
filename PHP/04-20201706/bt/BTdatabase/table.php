
 <?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $table = "Aptech_PHP23";
    $connect = mysqli_connect($servername,$username,$passwword,$table);
    if(!$connect){
        die("Đăng nhập thất bại:".mysqli_connect_error() );
    } 
    echo "Đăng nhập thành công"."<br>";

    $sql = "create table $table.users(
        id int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
         name varchar(255),
         email varchar(255),
         action varchar(15)
    )";
    if (mysqli_query($connect,$sql)) {
        echo "Tạo bảng thành công";
    } else {
        echo "error creating table" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>