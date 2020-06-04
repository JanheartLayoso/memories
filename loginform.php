<?php
    //Variables
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == "heart.layoso@gmail.com" && $password == "heart123") {
        header("Location: album.html");
        exit;
    } else {
        header("Location: error.html");
        exit;
    }
?>