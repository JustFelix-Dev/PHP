<?php
    require "connection.php";
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM students WHERE email='$email' AND password ='sola' OR 'X'='X'";

        //sola' OR 'X'='X


        $found=mysqli_query($conn,$query);
        if($found->num_rows > 0){
            echo("person found");

        }else{
            echo("wrong credentials");
        }
        // SQL injection
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./signin.php" method="POST">
        <input type="text" placeholder="Email" name="email">
        <input type="text" placeholder="Password" name="password">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>