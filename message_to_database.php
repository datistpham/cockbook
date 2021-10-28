<?php 
    require 'connect.php';
    $connas= connect();
    $kame= $_POST["message_to_database"];
    $ijf= $_POST["key"];
    $upin= "INSERT INTO message_vippro(send_message,detect_key) 
        VALUES('$kame','$detect_key')
    " ;
    $hula= mysqli_query($connas,$upin);
?>