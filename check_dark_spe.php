<?php 
    require 'connect.php';
    $conne= connect();
    $sql_11= "SELECT * FROM mode";
    $query_11= mysqli_query($conne,$sql_11);
    while($row= mysqli_fetch_array($query_11)) {
        $as= $row["state"];
        
    }
    $as= 0;
    $update_11= "UPDATE mode set state= $as";
    mysqli_query($conne,$update_11);
    echo $as;
?>