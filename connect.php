<?php
    function connect() {
        $server= "localhost";
        $user= "root";
        $password= "";
        $database= "cockbook";
        $conn= mysqli_connect($server,$user,$password,$database);
        return $conn;
    }
    
?>