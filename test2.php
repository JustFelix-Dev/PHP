<?php
    // CORS - CROSS ORIGIN RESOURCE SHARING
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: *');
    header("Access-Control-Allow-Headers: Content-Type, authorization");

    $_POST = json_decode(file_get_contents("php://input"))


    // store into the database
    
?>