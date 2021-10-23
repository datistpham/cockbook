<?php
    require('connect.php');
    function check_login() {
        $conne= connect();
        $sql= "SELECT * FROM user_information";
        $account= $_POST['account'];
        $password= $_POST['password'];
        $password1= md5($password);
        $password2= sha1($password);
        $password= $password1.$password2;
        $query= mysqli_query($conne,$sql);
        while($row= mysqli_fetch_array($query)) {
            if($row['account']==$account && $row['password']==$password) {
                
                $cookie_value= $account;
                setcookie("user",$cookie_value,time()+86400*30,"/");  
                $update_cookie= "UPDATE user_information set token_user = '$account' where user_information.account='$account'";
                mysqli_query($conne,$update_cookie);       
                echo '<span style="color:green;font-weight:700;">Login successfully.</span>
                <style>
                .lost-account_7spcl-1 {
                    display: none;
                }
                .lost-password_7spcl-1 {
                    display: none;
                }
            </style>
            <script>
                setTimeout(()=>{
                    window.location.href="http://localhost/cockbook/cockbook.php"

                },1200)
            </script>
                ';
                      
                return;
            }
        } 
        echo '<span style="color:red;font-weight:700">Account or password is incorrect. Please try again.</span>
            <style>
                .lost-account_7spcl-1 {
                    display: none;
                }
                .lost-password_7spcl-1 {
                    display: none;
                }
            </style>
            ';
        return;
    }
    $conn= check_login()
?>