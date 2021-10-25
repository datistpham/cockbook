<?php 
    require 'connect.php';
    $_SESSION["user"]= $_COOKIE["user"];
    $conneqq= connect();
    $qwe=  $_GET['story'];
    $sqli2= "UPDATE user_information set story= '$qwe' where token_user=".$_SESSION["user"]."";
    mysqli_query($conneqq,$sqli2);
    echo $qwe;
?>