<?php
    // CORS - CROSS ORIGIN RESOURCE SHARING
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: *');
    header("Access-Control-Allow-Headers: Content-Type, authorization");


    $allStudents = [
        [
            "firstname"=>"sola",
            "lastname"=>"sade",
            "email"=>"solasade@gmail.com",
            "password"=>"fish"
        ]
    ];

    // echo(json_encode($allStudents));

    //add blogs page, displayblogs (edit and delete blogs)
    // add blogs - title, body
    $query = "DELETE FROM blogs WHERE blog_id = '$id'"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./deleteblog.php" method="POST">
        <input type="hidden" value="$_POST['index']['blog_id']" name="index">
        <input type="submit" name="submit" value="delete blog">
    </form>
    <form action="./editblog.php" method="POST">
        <input type="hidden" value="$_POST['index']['blog_id']" name="index">
        <input type="submit" name="submit" value="Edit Blog">
    </form>

</body>
</html>