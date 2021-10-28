<?php 
require 'connect.php';
$connezx= connect();
$sqlzx= "SELECT * FROM theme_status";
$queryzx= mysqli_query($connezx,$sqlzx);
while($rowbv=mysqli_fetch_assoc($queryzx)) {
    if($rowbv['res']==$_POST['theme_specified']) {
        echo $rowbv['them_specified'];
        break;

    }
}
?>