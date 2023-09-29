<?php
    $conn =mysqli_connect("localhost","root","","school_db");
    // $conn = new mysqli("localhost","root","","school_db");
    if($conn){
        echo("connected");
    }else{
        echo("could not connect");
        // echo(mysqli_connect_error());
        // echo($conn->connect_error);
    }

?>