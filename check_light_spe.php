<?php 
    require 'connect.php';
    $conne= connect();
    $sql_10= "SELECT * FROM mode";
    $query_10= mysqli_query($conne,$sql_10);
    while($row= mysqli_fetch_array($query_10)) {
        $as= $row["state"];
        
    }
    $as= 1;
    $update_10= "UPDATE mode set state= $as";
    mysqli_query($conne,$update_10);
    echo $as;
?>