<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <a href="home.php">HOME</a>
            
            <div class="head m-auto">
                <H1>USER CRUD LARAVEL</H1>
            </div>
        </div>
    </div><hr>
    <form action="home.php" method="POST">
        NAME <br>
        <input class="input" type="text" Name="login" placeholder="Name" >.<br>
        EMAIL <br>
        <input class="input" type="Email" Name="Email" placeholder ="Email">.<br>
        PASSWORD <br>
        <input class="input" type="Password" Name="password" placeholder="Password">.<br>
        <button class="confirm">CONFIRM</button>

     


    </form><hr>
    <button class="create">CREATE A NEW USER</button>
    


</body>
</html>    