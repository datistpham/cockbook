<?php 
    require 'connect.php';
    $conne= connect();
    $receiveMes= $_POST['message'];
    $key_detect= $_POST['key'];
    echo "
    <div class='a".$key_detect."'>
    <p class='received'>
        $receiveMes
    </p>
</div>
    ";
?>
