<?php 
    setcookie("user","",time()-3600,"/");
    session_destroy();
?>