<?php
    require("connect.php");
    if(isset($_POST['account'])) {

    
    function auth_account() {
        $account_receive= $_POST['account'];
        $conne= connect();
        $query= "SELECT account from user_information";
        $sql= mysqli_query($conne,$query);
        while($row=mysqli_fetch_array($sql)) {
            if($account_receive==$row['account']) {
                echo "x Account is exist ! Please enter another account.";
            }
        }

    }
}
    $auth= auth_account();
?>