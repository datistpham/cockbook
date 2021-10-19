<?php   
        require('connect.php');
        function insert() {

            
            $conne= connect();
            $account= $_POST['account'];
            $password= $_POST['password'];
            $password1= md5($password);
            $password2= sha1($password);
            $password= $password1.$password2;
            $firstname= $_POST['firstname'];
            $surname= $_POST['surname'];
            $date= $_POST['birthday_date'];
            $month= $_POST['birthday_month'];
            $year= $_POST['birthday_year'];
            $gender= $_POST['gender'];
            $query= "INSERT INTO user_information(account,password,firstname,surname,date,month,year,gender) VALUES(?,?,?,?,?,?,?,?)";
            $stmt= $conne->prepare($query);
            $stmt->bind_param('ssssssss',$account,$password,$firstname,$surname,$date,$month,$year,$gender);
            $stmt->execute();
            $conne->close();
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        $coc= insert();
?>