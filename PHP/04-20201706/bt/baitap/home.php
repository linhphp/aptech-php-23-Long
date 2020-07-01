<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<?php
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $table = "Aptech_PHP23";

    $name = $_POST['name'];
    $email = $_POST['Email'];
    $pass = $_POST['password'];
    
    $conn = mysqli_connect($servername, $username, $password, $table);
    
    if (!$conn) {
    die("Đăng nhập thành công: " . mysqli_connect_error());
    }

    /*$sql = "INSERT INTO $table.users(name, email, password)
    VALUES ('$name', '$email', '$pass')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

    $sql = "select *from $table.users";

    $result = mysqli_query($conn,$sql);
    ?>
<html>    
<body>
    <div class="container">
        <div class="row mt-3">
            <a href="home.php">HOME</a>
            
            <div class="head m-auto">
                <H1>USER CRUD LARAVEL</H1>
            </div>
        </div><hr>
        <div class="row">
            <div class="index">
                <P>INDEX PAGE</P>
            </div>
           
        </div>
    </div>

    <div class="container">
        <div class="row">
           <div class="col-12">
           <table class="table">
                <thead class="thead">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        
                        <th>Acion</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <?php
                    if (mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_assoc($result)){
                              
                        ?>
                        <tr>
                            <th><?php echo $row['id']?></th>
                           <th><?php echo $row['name']?></th>
                            <th><?php echo $row['email']?></th>
                            
                            <th class="tong d-flex">
                                <div class="show">
                                    <a href ="show.php">Show </a>
                                </div>
                                <div class="edit">
                                    <a href ="">Edit </a>
                                </div>
                                <div class="delete">
                                    <a href ="delete.php<?php echo $row['name'];?>">Delete </a>
                                </div>
                                
                            </th>
                        </tr>      

                            <?php
                            }
                         }
                    ?>
                    
                </tbody>
            </table>   
           </div> 
                                  
                        
        </div>
        
    </div><hr>
    
    <form action="index.php" method="POST">
        <button class="create">CREATE A NEW USER</button>
    </form>
    
     
</body>
</html>