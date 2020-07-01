<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
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
                   
                        <tr>
                            <th></th>
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

                    
                </tbody>
            </table>   
           </div> 
                                  
                        
        </div>
        
    </div><hr>
    
    <form action="index.php" method="POST">
        <button class="create">CREATE A NEW USER</button>
    </form>
    <?php
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $pass =$_POST['password'];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $table = "php_23";

        $conn = mysqli_connect($servername, $username, $password, $table);

        $sql = "INSERT INTO $table.users(name, email, password)
        VALUES ('$name','$email', '$pass')";
    ?>
     
</body>
</html>