<?php
    $fgwqfdgjdg= $_GET['detecx'];
    require 'connect.php';
    $glkjffgfndfgfdf= connect();
    $gnldgnsgfgdkfdf= "SELECT * FROM font_family";
    $gddjfsfdnsklfds= mysqli_query($glkjffgfndfgfdf,$gnldgnsgfgdkfdf);
    while($gdsdfsfbnjsf= mysqli_fetch_assoc($gddjfsfdnsklfds)) {
        if($gdsdfsfbnjsf['deass']== $fgwqfdgjdg) {
            echo $gdsdfsfbnjsf['font_type'];
            break;
        }
    }
?>