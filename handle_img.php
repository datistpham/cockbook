<?php 
    require 'connect.php';
    if(isset($_POST['upload'])) {
        $conn= connect();
        $errors= array();
        $file_name= $_FILES['image']['name'];
        $file_size= $_FILES['image']['size'];
        $file_tmp= $_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_parts= explode('.',$_FILES['image']['name']);
        $file_ext= strtolower(end($file_parts));
        $expensions= array("jpeg","jpg","png");
        if(in_array($file_ext,$expensions)=== false) {
            $errors[]= "Only support JPEG or PNG files.";
        }
        if($file_size> 2097152) {
            $errors[]= 'File not large than 2 Mb.';
        }
        $image= $_FILES['image']['name'];
        $target= "photo/".basename($image);
        $sql= "INSERT INTO images (image) values ('$image')";
        mysqli_query($conn,$sql);
        while($row= mysqli_fetch_array($result)) {
            echo '
                <div class="show_image_1">';
                echo "<img width='100%' height='100%' src='photo/".$row['image']."' >";
            echo  '</div>
            ';
        }
    }
?>