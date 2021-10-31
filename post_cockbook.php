<?php 
    require 'connect.php';
    $conn= connect();
    $person_post= $_GET['name_post'];
    $content= $_GET['text'];
    $class_detect= $_GET['class_detect'];
    $background= $_GET['background'];
    $avatar= $_GET['avatar'];
    $id_user= $_GET['id_current'];
    if($_GET['image']==='') {
        $_GET['image']='';
        $image_content= $_GET['image'];
    }
    $sql= "INSERT INTO post_cockbook(name_post,content,class_detect,background,image_content,avatar,id_user) values('$person_post','$content','$class_detect','$background','$image_content','$avatar',$id_user)";
    $query= mysqli_query($conn,$sql);

?>

