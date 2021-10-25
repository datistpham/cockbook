<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    sleep(1);
}
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
}
require '../connect.php';
$conne = connect();
$sql_11 = "SELECT * FROM mode";
$query_11 = mysqli_query($conne, $sql_11);
while ($row = mysqli_fetch_array($query_11)) {
    $as = $row["state"];
}

if ($as === 0) {
    require "../check_dark.php";
} else if ($as === 1) {
    require "../check_light.php";
}
//

if ($_COOKIE['light_mode_vippro'] == 1) {
    echo "<style>
        .friends-2-spc {
            background-color: #f2f0f5!important;
        }
        .friends {
            background-color: #f2f0f5 !important;
        }
        .friends-2-spc * {
            color: black !important;
        }
        .friends-list-items {
            background-color: #ffffff !important;  
        }
        .friends-1-spc,.friends-1-spc-vippro {
            background-color: #ffffff !important;

        }
        .friends-1-spc * {
            color: black !important;
        }
        .friends-1-spc-2>div>div>div>div:first-of-type {
            background-color: #f2f0f5 !important;
        }
        .friends-1-spc-2>div>div>div>div:first-of-type i {
            filter: invert(12%) sepia(5%) saturate(1101%) hue-rotate(182deg) brightness(86%) contrast(95%);
        }
       
        .friends-1-spc-1-2 {
            background-color: #f2f0f5;
        }   
        .friends-action>div {
            background-color: #e4e6eb;
        }
        .ruieyt8ir {
            background-color: #f2f0f5 !important;
        }
        .friends-1-spc-2>div {
            transition: all 0.2s linear !important;
        }
        .friends-1-spc-2>div:hover {
            background-color: #f2f0f5 !important;
        }
        .friends-1-spc-1-2 {
            background-color: #f2f0f5 !important;
        }
        .friends-action>div:nth-of-type(2) {
            background-color: #e4e6eb !important;
        }
        .friends-action>div:first-of-type {
            background-color: #e7f3ff !important;
        }
        .friends-add-friends {
            color: #1877f2 !important;
        }
         
        .friends-2-spc-1-1-2 p {
            color: #1877f2 !important;
        }
        .friends-1-spc-2>div>div>div div:nth-of-type(2) i {
            filter: invert(12%) sepia(5%) saturate(1101%) hue-rotate(182deg) brightness(86%) contrast(95%) !important;
        }
        .friends-1-spc-2-1-2 i {
            filter: invert(0%) sepia(7%) saturate(7473%) hue-rotate(351deg) brightness(87%) contrast(105%) !important;
        }
        .friends-1-spc-1-2 i {
            filter: invert(0%) sepia(7%) saturate(7473%) hue-rotate(351deg) brightness(87%) contrast(105%) !important;

        }
        .header-fixed {
            background-color: #ffffff !important;
            border-bottom: none !important;
            box-shadow: 0px 5px 1px -3px rgba(219,219,219,1) !important;
-webkit-box-shadow: 0px 5px 1px -3px rgba(219,219,219,1) !important;
-moz-box-shadow: 0px 5px 1px -3px rgba(219,219,219,1) !important;
        }
        .search {
            background-color: #f2f0f5 !important;
        }
        ._9epx_1>li {
            background-color: #f2f0f5 !important;
        }
        ._9epx_1>li i,._12epx_2 i {
            filter: invert(0%) sepia(7%) saturate(7473%) hue-rotate(351deg) brightness(87%) contrast(105%) !important;
            
        }
        ._9epx_1>li svg path {
            fill: black !important;
        }
        .fjkdlf {
            background-color: #ffffff !important;
        }
        .propro * {
            color: black !important;
        }
        .profile-header {
            background-color: #ffffff !important;
        }
        .section-main {
            background-color: #f2f0f5 !important;
        }
        ._8_sp_lg {
            background-color: #f2f0f5 !important;
        }
        .profile-id {
            background-color: #f2f0f5 !important;
        }
        .name-info, {
            color: black !important;
        }
        .header-2,.recommend-friends,.biology{
            background-color: #ffffff !important;
        }
        .load-profile-vippro div {
            background-color: #ffffff !important    
        } 
        @media screen and (max-width: 1200px) {
        ._12epx_2 {
            background-color: #f0f2f5 !important;
        }
        }
        .create-status {
            background-color: #ffffff !important;
        }
        .wrapper {
            background-color: #ffffff !important;
            
        }
        .wrapper * {
            color: #000000 !important;
        }
        .create-status-1 {
            border-bottom: 1px solid #e4e6eb !important;
        }
        .nxhoafnm,.story div{
            background-color: #ffffff !important;
        }
        .item {
            background-color: #ffffff !important;
        }
        ._7_sp_lg::-webkit-scrollbar-track {
            background-color: rgba(111, 111, 111, 0.15);
        }
        .nxhoafnm {
            background-color: #f2f0f5 !important;
        }
        ._9_sp_lg > div {
            border-bottom: 1px solid  #e4e6eb !important;
        } 
        body #main .wrapper ._7_sp_lg ._7_sws_1 {
            border-bottom: 1px solid #e4e6eb !important;
        }
        .item5-spc>div {
            border-bottom: 1px solid #e4e6eb !important;
            border-top: 1px solid #e4e6eb !important;
            
        }
        ._12epx_wq:hover,._8epx_2:hover,._7_sp_lg_su_a_spc>div:hover,._13_ac_st_1>section:first-of-type:hover,._13_fr_ya_4_pr_f-2:hover,._13_fr_ya_4_pr_f-3 >section:hover  {
            background-color: #f2f0f5 !important;
        }   
        ._8epx_2 div {
            background-color: #f2f0f5 !important;
        }
        
        ._9epx_1 li div {
            background-color: #f2f0f5 !important;
        }
        ._7_sp_lg_su_a_7_1 {
            background-color: #e4e6eb !important;
        }
        ._7_sp_lg_su_a_7_1 i {
            filter: invert(0%) sepia(100%) saturate(0%) hue-rotate(192deg) brightness(94%) contrast(102%) !important;
        }
        ._13_ac_st_1 {
            background-color: #fff !important;
        }
        ._13_ac_st_1 * {
            color: #000 !important;
        }
        ._13_fr_ya_4_pr_f-2_no {
            background-color: #e4e6eb !important;
        }
        ._13_fr_ya_4_pr_f-3 >section>section>section {
            background-color: #e4e6eb !important;
        }
        ._13_fr_ya_4_pr_f-3>section:hover p ,._13_fr_ya_4_pr_f-2:hover p {
            color: #ffffff !important;
        }
        ._8epx_1>li svg path {
            fill: black ;
        }
        .propro .section-main .header-2 {
            border: none !important;
        }
        .add-story1 span {
            color: #fff !important;
        }
        .header-2-2-content, {
            background-color: #e4e6eb !important;
        }
        .detail-photo {
            border: none !important;
            background-color: #e4e6eb !important;
        }
        #load-profile-vippro {
            background-color: #e4e6eb !important;
        }
        .item2z {
            background-color: #ffffff !important;
        }
        .tap-to-edit-bio {
            background-color: #e4e6eb !important
        }
        .header-2-2-content,.ffjofrjwar {
            background-color: #e4e6eb !important;
        }
        .ffjofrjwar svg circle,.header-2-2-content svg circle {
            fill: black !important;
        }
        .dfhfsd, .jsiosiodsdio button {
            background-color: #e4e6eb !important;
        }
        .hdhsiodda i {
            filter: invert(86%) sepia(8%) saturate(109%) hue-rotate(186deg) brightness(111%) contrast(85%) !important;
        }
        .dfhfsd::placeholder {
            color: black !important;
        }
        .lds-ring {
            background-color: #fff !important;
        }
    </style>";
}


?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style>
    .friends-1-spc {
        width: 360px;
        height: 100%;
        background-color: #242526;
        padding: 8px;
        position: fixed;
        left: 0;
        top: 57px
    }

    .friends-1-spc-vippro {
        width: 100%;
        height: 100%;
        background-color: #242526;
    }

    .friends-2-spc {
        width: calc(100% - 360px);
        height: 100%;
    }

    .friends-1-spc-1 {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 8px 8px 16px 8px;
        margin-top: -5px;
    }

    .friends-1-spc-1-2 {
        width: 36px;
        height: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #3a3b3c;
        border-radius: 50%;
    }

    .friends-1-spc-1-1 {
        font-size: 24px;
        color: #e4e5eb;
        font-weight: 900;
    }

    .friends-1-spc-1-2 i {
        filter: invert(96%) sepia(5%) saturate(140%) hue-rotate(182deg) brightness(96%) contrast(94%);
    }

    .friends-1-spc-2-1 {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .friends-1-spc-2-1-1 {
        display: flex;
        flex-direction: row;
        gap: 10px;
        justify-content: center;
        align-items: center;
    }

    .friends-1-spc-2-1-1-1 {
        width: 36px;
        height: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        background-color: #3a3b3c;
        margin-left: 5px
    }

    .erthuskfh {
        background-color: #1877f2;

    }

    .friends-1-spc-2-1-1-1 i {
        filter: invert(97%) sepia(10%) saturate(328%) hue-rotate(94deg) brightness(122%) contrast(100%);
    }

    .friends-1-spc-2-1-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-right: 10px;

    }

    .friends-1-spc-2-1-2 i {
        filter: invert(91%) sepia(8%) saturate(94%) hue-rotate(185deg) brightness(98%) contrast(99%);
    }

    .friends-1-spc-2>div {
        width: 100%;
        height: 48px;
        display: flex;
        align-items: center;
        border-radius: 10px;
        transition: all 0.25s linear;
        cursor: pointer;
        user-select: none;
    }

    .friends-1-spc-2>div:hover {
        background-color: #3a3b3c;

    }

    .friends-1-spc-2>div>div {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .friends-1-spc-2>div * {
        color: #e4e6eb;
    }

    .friends-1-spc-2 {
        display: flex;
        flex-direction: column;

        gap: 0;
    }

    .friends-1-spc-2-1 {
        border-radius: 10px;

    }

    .ruieyt8ir {
        background-color: #3a3b3c;
        justify-content: space-between;
    }

    .ruieyt8ir .friends-1-spc-2-1-1 {
        justify-content: unset;
        align-items: center;
    }

    .ruieyt8ir .friends-1-spc-2-1-2 {
        justify-content: flex-end;
    }

    /* Response */
</style>


<div class="friends-1-spc">
    <div class="friends-1-spc-vippro">


        <div class="friends-1-spc-1">
            <p class="friends-1-spc-1-1 lang" data-it-root="Friends" data-it="Bạn bè">
                Friends
            </p>
            <div class="friends-1-spc-1-2">
                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/tBr7iKHYsZc.png&quot;); background-position: -22px -438px; background-size: 50px 576px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
            </div>
        </div>
        <div class="friends-1-spc-2">
            <div class="friends-1-spc-2-1 ruieyt8ir">
                <div class="friends-1-spc-2-1-1">
                    <div class="friends-1-spc-2-1-1-1 erthuskfh">
                        <i data-visualcompletion="css-img" class="hu5pjgll eb18blue" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/5AxyWIIPD3A.png&quot;); background-position: 0px -258px; background-size: 26px 630px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                    </div>
                    <div class="friends-1-spc-2-1-1-2">
                        Home
                    </div>
                </div>

            </div>



            <div class="friends-1-spc-2-2">
                <div class="friends-1-spc-2-1 send-friend-requests">
                    <div class="friends-1-spc-2-1-1">
                        <div class="friends-1-spc-2-1-1-1">
                            <i data-visualcompletion="css-img" class="hu5pjgll eb18blue" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/5AxyWIIPD3A.png&quot;); background-position: 0px -258px; background-size: 26px 630px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="friends-1-spc-2-1-1-2">
                            Friend Requests
                        </div>
                    </div>
                    <div class="friends-1-spc-2-1-2">
                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -22px -110px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                    </div>
                </div>
            </div>
            <div class="friends-1-spc-2-3">
                <div class="friends-1-spc-2-1">
                    <div class="friends-1-spc-2-1-1">
                        <div class="friends-1-spc-2-1-1-1">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/5AxyWIIPD3A.png&quot;); background-position: 0px -192px; background-size: 26px 630px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="friends-1-spc-2-1-1-2">
                            Suggestions
                        </div>
                    </div>
                    <div class="friends-1-spc-2-1-2">
                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -22px -110px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                    </div>
                </div>
            </div>
            <div class="friends-1-spc-2-4">
                <div class="friends-1-spc-2-1">
                    <div class="friends-1-spc-2-1-1">
                        <div class="friends-1-spc-2-1-1-1">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/5AxyWIIPD3A.png&quot;); background-position: 0px -214px; background-size: 26px 630px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="friends-1-spc-2-1-1-2">
                            All Friends
                        </div>
                    </div>
                    <div class="friends-1-spc-2-1-2">
                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -22px -110px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                    </div>
                </div>
            </div>
            <div class="friends-1-spc-2-5">
                <div class="friends-1-spc-2-1">
                    <div class="friends-1-spc-2-1-1">
                        <div class="friends-1-spc-2-1-1-1">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/5AxyWIIPD3A.png&quot;); background-position: 0px -302px; background-size: 26px 630px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="friends-1-spc-2-1-1-2">
                            Birthdays
                        </div>
                    </div>

                </div>
            </div>
            <div class="friends-1-spc-2-6">
                <div class="friends-1-spc-2-1">
                    <div class="friends-1-spc-2-1-1">
                        <div class="friends-1-spc-2-1-1-1">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/5AxyWIIPD3A.png&quot;); background-position: 0px -214px; background-size: 26px 630px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="friends-1-spc-2-1-1-2">
                            Custom Lists
                        </div>
                    </div>
                    <div class="friends-1-spc-2-1-2">
                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -22px -110px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!--  -->
<!--  -->
<!--  -->
<!--  -->
<script>
    $(".send-friend-requests").on("click", function() {
        $.ajax({
            url: "friend_requests.php",
            method: "POST",
            success: function(data) {
                $(".friends-1-spc").html('')
                $(".friends-1-spc").html(data)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $(".friends-1-spc").html("jfohfdoiesfhjnioedfheu9rh")

            }
        })
    })
</script>
<link rel="stylesheet" href="style2.css">
<style>
    @media screen and (max-width:1460px) {
        .friends-2-spc-2 .friends-list-items {
            width: 230px !important;
        }
    }

    @media screen and (max-width:1366px) {
        .friends-2-spc-2 .friends-list-items {
            width: 270px !important;
        }
    }

    @media screen and (max-width:1250px) {
        .friends-2-spc-2 .friends-list-items {
            width: 315px !important;
        }
    }

    @media screen and (max-width:1100px) {
        .friends-2-spc-2 .friends-list-items {
            width: 250px !important;
        }
    }

    @media screen and (max-width:936px) {
        .friends-2-spc-2 .friends-list-items {
            width: 230px !important;
        }
    }

    @media screen and (max-width:899px) {
        .friends-2-spc-2 .friends-list-items {
            width: 200px !important;
        }
    }

    @media screen and (max-width:840px) {
        .friends-2-spc-2 .friends-list-items {
            width: 320px !important;
        }
    }

    @media screen and (max-width:500px) {
        .friends-2-spc {
            display: none !important;
        }
    }

    @media screen and (max-width:754px) {
        .friends.ueiortu {
            position: relative !important;
            top: 100px !important
        }

        .friends-1-spc {
            top: 100px !important;
        }
    }
</style>
<div class="friends-2-spc">
    <div class="friends-2-spc-1">
        <div class="friends-2-spc-1-1">
            <div class="friends-2-spc-1-1-1">
                <h1>People you may know</h1>
            </div>
            <div class="friends-2-spc-1-1-2">
                <p>see all</p>
            </div>
        </div>
    </div>
    <div class="friends-2-spc-2">
        <?php
        $connec = new mysqli("localhost", "root", "", "cockbook");
        $queryzzzz = "SELECT user_information.firstname, user_information.surname,request_friends.image FROM user_information INNER JOIN request_friends ON user_information.id=request_friends.id";
        $sqlzzz = mysqli_query($connec, $queryzzzz);
        while ($rowqw = mysqli_fetch_array($sqlzzz)) {


            ?>
            <div class="friends-list-items" style="cursor: pointer">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAA1JREFUGFdj6On3/w8ABX8Cav5q0u8AAAAASUVORK5CYII=" lazy-src="<?php echo $rowqw['image'] ?>">
                <div class="friends-name">
                    <p class="friend-name-1">
                        <?php echo $rowqw['firstname'] ?> <?php echo $rowqw['surname'] ?>
                    </p>
                </div>
                <div class="friends-action">
                    <div class="friends-add-friends">
                        Add Friend
                    </div>
                    <div class="friends-remove-friends">
                        Remove
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
    <script>
        function load(img) {
            const url = img.getAttribute('lazy-src')
            img.setAttribute('src', url)
        }

        function ready111() {
            let lazyImg = document.querySelectorAll('[lazy-src]')
            let observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        load(entry.target)
                    }
                })
            })
            lazyImg.forEach(img => {
                observer.observe(img)
            })
        }
        document.addEventListener('DOMContentLoaded', ready111())
    </script>
</div>