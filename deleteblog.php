<?php
    if(isset($_POST["submit"])){
        $index = $_POST["index"];
        $query = "DELETE FROM blogs WHERE blog_id = '$index'";
        header("Location : dashboard.php");
    }

?>