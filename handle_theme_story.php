<?php
require 'connect.php';
$connzzzzzx= connect();
$pldsdadsas= "SELECT * FROM theme_story";
$dhfioedjwi= mysqli_query($connzzzzzx,$pldsdadsas);
while($jfdsgjiofgow=mysqli_fetch_assoc($dhfioedjwi)) {
    if($_GET['recogId']== $jfdsgjiofgow['send_re']) {
        echo $jfdsgjiofgow['theme_official'];
        break;
    }
}
?>