<?php
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
}
session_start();
$_SESSION['user'] = $_COOKIE['user'];

require 'connect.php';
$conne = connect();

$detect_account = "SELECT * from user_information where token_user=" . $_SESSION["user"] . ""; // declare 1 row
$query_de = mysqli_query($conne, $detect_account);
while ($rowzz = mysqli_fetch_assoc($query_de)) {
    if ($rowzz['token_user'] == $_COOKIE["user"]) {
        $name_single_login = $rowzz['surname'];
        $name_login = $rowzz['surname'] . " " . $rowzz['firstname'];
        $id_login = $rowzz['id'];
        $storyz = $rowzz['story'];
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en" id="cockbook">


<head>
<script src='7hDInKqY9Bt.js' async="1" crossorigin="anonymous"></script>

    <script type="module">
        // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDRNsk8eji8J6BBWCSIzQ9HcdGWm6opN4k",
    authDomain: "inlaid-goods-323805.firebaseapp.com",
    projectId: "inlaid-goods-323805",
    storageBucket: "inlaid-goods-323805.appspot.com",
    messagingSenderId: "795778883777",
    appId: "1:795778883777:web:8e3b6de48b424f908ab440",
    measurementId: "G-BJ2HC7403W"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">

    <link rel='shortcut icon' type='image/x-icon' href='c-programe.png' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src="iwrjiojrjaweoiaf.js" async="1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Cockbook</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-size: 16px;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif !important;
        }



        body,
        html {
            width: 100%;
            height: 100%;
        }

        .item {
            background: #18191a !important;
        }

        #main {
            width: 100%;
            height: 100%;
            position: relative;

        }

        #main .header-fixed {
            width: 100%;
            height: 57px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #242526;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 8px 15px;
        }

        ._7_sp_lg::-webkit-scrollbar,
        ._8_sp_lg::-webkit-scrollbar,
        ._9_sp_lg::-webkit-scrollbar {
            width: 10px;
        }

        ._7_sp_lg::-webkit-scrollbar-track,
        ._8_sp_lg::-webkit-scrollbar-track,
        ._9_sp_lg::-webkit-scrollbar-track {
            background-color: rgba(111, 111, 111, 0.15);
            visibility: hidden;
            transition: all 1s linear;

        }

        ._7_sp_lg::-webkit-scrollbar-track {
            background-color: #18191a;
        }

        ._7_sp_lg::-webkit-scrollbar-thumb,
        ._8_sp_lg::-webkit-scrollbar-thumb,
        ._9_sp_lg::-webkit-scrollbar-thumb {
            background-color: rgba(111, 111, 111, 0.7);
            border-radius: 10px;
            transform: scale(0.75);
        }

        ._7_sp_lg::-webkit-scrollbar-thumb:hover,
        ._8_sp_lg::-webkit-scrollbar-thumb:hover,
        ._9_sp_lg::-webkit-scrollbar-thumb:hover {
            background-color: rgba(111, 111, 111, 1);

        }

        ._7_sp_lg:hover::-webkit-scrollbar-track,
        ._8_sp_lg:hover::-webkit-scrollbar-track,
        ._9_sp_lg:hover::-webkit-scrollbar-track {
            visibility: visible;
        }

        @font-face {
            font-family: myfont;
            src: url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swapsation_light.woff");
        }

        ._8epx_2_12pcx_1,
        ._8epx_2_12pcx_2,
        ._8epx_2_12pcx_3,
        ._8epx_2_12pcx_4,
        ._8epx_2_12pcx_5 {
            font-family: sans-serif, myfont !important;
            font-weight: lighter !important;
            font-size: 14px
        }

        ._9epx_2 {
            position: relative;

        }

        ._9epx_2 div {
            position: absolute;
            top: 50px;
            display: none;
            font-family: sans-serif, myfont !important;
            font-size: 14px;
            padding: 10px 12px;
            border-radius: 7px;
            background-color: rgba(255, 255, 255, 0.75);
            color: #000000;

        }

        ._17ev_or_1:hover ._8epx_2_12pcx_1 {
            display: block !important;
        }

        ._17ev_or_2:hover ._8epx_2_12pcx_2 {
            display: block !important;
        }

        ._17ev_or_3:hover ._8epx_2_12pcx_3 {
            display: block !important;
        }

        ._17ev_or_4:hover ._8epx_2_12pcx_4 {
            display: block !important;
        }

        ._17ev_or_5:hover ._8epx_2_12pcx_5 {
            display: block !important;
        }

        ._75_re_21_sa_1:hover ._13_fr_ya_1 {
            display: block !important;

        }

        ._75_re_21_sa_2:hover ._13_fr_ya_2 {
            display: block !important;

        }

        ._75_re_21_sa_3:hover ._13_fr_ya_3 {
            display: block !important;

        }

        ._75_re_21_sa_4:hover ._13_fr_ya_4 {
            display: block !important;

        }

        ._14_ac_st_1>section {
            align-items: center;
            gap: 10px
        }

        .search::placeholder {
            font-weight: lighter;
            font-family: sans-serif !important;
        }

        .header-fixed-supervippro {
            display: none;
        }

        body #main .wrapper ._7_sp_lg ._7_sws_1 ._7_sp_lg_su_a_spc div {
            width: 100%;
            /* padding: 0 !important; */
            padding-left: 5px !important
        }

        ._12epx_2 {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        ._12epx_2 .l2qw32fc {
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 20px;
            z-index: 0
        }

        .search {
            padding-bottom: 7px !important;
            transition: all 0.35s linear;
            font-weight: lighter;
            font-family: sans-serif !important;
        }

        .l2qw32fc {
            padding: 5px;
        }

        .sduigh1 {
            display: flex !important;
        }

        ._9_sp_lg>div {
            user-select: none;
        }

        @media screen and (max-width: 770px) {
            .wrapper {
                padding: 0 !important;
                width: 100%;
            }

            ._8_sp_lg {
                padding: 0 !important;

            }

            ._8_sp_lg::-webkit-scrollbar {
                width: 0 !important;
            }

            ._8_sp_lg .item {
                width: 100% !important;
                padding: 0 !important;
            }

            ._8_sp_lg_su_se {
                width: 100% !important;
            }

            ._8epx_1 li {
                padding: 0 5px !important;
            }

            .story {
                padding: 0 10px !important
            }

            .header-fixed {
                height: 100px !important;
                flex-direction: column !important;

            }

            .wrapper {
                top: 100px !important;
            }

            ._12epx {
                order: 1 !important;
            }

            ._8epx {
                order: 3 !important;
                width: 100% !important;
            }

            ._8epx_1 {
                width: 100% !important;
                justify-content: space-between !important;

            }

            ._9epx {
                order: 2 !important;
            }

            ._9epx_1 li {
                width: 44px !important;
                box-sizing: border-box !important;
            }

            .header-fixed-supervippro {
                display: flex;
                width: 100% !important;
                justify-content: space-between
            }

            .header-fixed>div._12epx {
                display: none !important;
            }

            .header-fixed>div._9epx {
                display: none !important;
            }

            .fhjdufheuw {
                filter: invert(100%) sepia(0%) saturate(1%) hue-rotate(231deg) brightness(102%) contrast(101%) !important;
            }

        }

        #all-full-page {
            position: relative;

        }

        /*  */

        .lds-ring {
            display: inline-block;
            position: absolute;
            width: 80px;
            height: 80px;
            z-index: 999;
            left: 46%;
            top: 10%;
            transform: scale(-100%, -100%);
            margin-top: -200px;
            opacity: 0;
            transition: all 0.2s ease-out;
            background: #18191a;
            border-radius: 50%;
            transform: scale(0.8);

        }

        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border: 5px solid #fff;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #2196F3 transparent transparent transparent;
            
        }

        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
        
        
        .blur-aovcl {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color:rgba(0, 0, 0, 0.45);
            z-index: 900;
        }
        .post-status {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 500px;
            height: auto;
            background: #242526;
            border-radius: 8px;
            z-index: 990;
        }
        .title-post-status {
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: center;
            align-content: center;
            text-align: center;
            border-bottom: 1px solid #2f3031;

        }
        .title-post-status h3 {
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            vertical-align: middle;
            line-height: 60px
        }
        .main-status {
            margin: 0 16px;
            padding: 16px 0;

        }
        .main-status-section1 {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-direction: row;
        }
        .main-status-section2 {
            padding: 16px 0;
        }
        .gaygsdfdf {
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;    
        }
        .gaygsdfdf img {
            border-radius: 50%;
        }
        .jsiufhainskd {
            display: flex;
            flex-direction: column;
            gap: 3px;
            }
            .enter-content-status {
                width: 100%;
                border: none;
                outline: none;
                background-color: unset;
                font-size: 24px;
                min-height: 60px;
                word-wrap: break-word;
                font-family: sans-serif !important;
                font-weight: 500;
            }
            .main-status-section3 {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            .main-status-section3>div {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .main-status-section4 {
                width: 100%;
                height: 56px;
                display: flex;
                padding: 8px;
                justify-content: space-between;
                align-items: center;
                border-radius: 8px;
                border: 1px solid #3e4042;
                margin: 16px 0;
            }
.main-status-section4-2 {
    display: flex;
    flex-direction: row;
}
            .main-status-section4-2>div {
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }
            .main-status-section4-2>div>div {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                transition: all 0.25s ease-in-out;
            }
            .main-status-section3>div {
                cursor: pointer;
            }
            .main-status-section4-2>div>div:hover {
                background-color: #3a3b3c;
            }
.main-status-section5 {
    width: 100%;
    height: 36px;
    border-radius: 8px;
}
.main-button-section5 {
    background-color: #505151;
    color: #858686;
    cursor: not-allowed;
}
.close-status {
    position: absolute;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.25s linear;
    right: 0;
    background-color: #3a3b3c;
    top:3%;
    right:3%;
    cursor: pointer;
}
.close-status i {
    filter: invert(86%) sepia(8%) saturate(109%) hue-rotate(186deg) brightness(111%) contrast(85%);
}


    </style>

</head>

<body id="all-full-page">
<div class="blur-aovcl" style="display:none"></div>
    <div class="post-status" style="display:none">
        <div class="close-status">
            
                <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/zvppbGMwrd_.png&quot;); background-position: -154px -110px; background-size: 190px 190px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
            
        </div>
        <div class="title-post-status">
            <h3 class="content-title">
                Create post
            </h3>
        </div>
        <div class="main-status">
            <div class="main-status-section1">
                <div class="gaygsdfdf" ><img src="https://scontent.fhph1-3.fna.fbcdn.net/v/t1.6435-1/cp0/c0.0.60.60a/p60x60/115766767_344381379910345_2906344814977556019_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=MvfZyA4L2DMAX-cq8KA&_nc_ht=scontent.fhph1-3.fna&oh=d227aa22822253604a8d8a0c2ec090d0&oe=619D9468" width="40px" height="40px" alt=""></div>
                <div class="jsiufhainskd">
                    <p style="font-size: 12px"><?php echo $name_login ?></p>
                    <div class="select-audience" style="border-radius:5px;width:max-content;font-size: 12px;padding: 4px 5px;background-color: #3a3b3c">Public</div>
                </div>
            </div>
            <div class="main-status-section2">
                <input type="text" placeholder="<?php echo "What's on your mind $name_single_login ?" ?>" class="enter-content-status">
            </div>
            <div class="main-status-section3" style="width:100%">
                <div class="main-status-section3-1"><img height="38" alt="" referrerpolicy="origin-when-cross-origin" src="	https://www.facebook.com/images/composer/SATP_Aa_square-2x.png"></div>
                <div class="main-status-section3-2"><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/AkEan132Ikr.png&quot;); background-position: 0px -190px; background-size: 34px 1638px; background-repeat: no-repeat; display: inline-block;"></i></div>

            </div>
            <!--  -->
            <div class="main-status-section4">
                <div style="cursor:pointer" class="main-status-section4-1"><p style="font-size: 14px;font-family:sans-serif !important;font-weight: 500;" class="jdaawffawe">Add to your post</p></div>
                <div class="main-status-section4-2">
                    <div class="main-status-section4-2-1"><div><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/AkEan132Ikr.png&quot;); background-position: 0px -268px; background-size: 34px 1638px; background-repeat: no-repeat; display: inline-block;"></i></div></div>
                    <div class="main-status-section4-2-1"><div><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/AkEan132Ikr.png&quot;); background-position: 0px -242px; background-size: 34px 1638px; background-repeat: no-repeat; display: inline-block;"></i></div></div>
                    <div class="main-status-section4-2-1"><div><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/jFFXSLBdcxF.png&quot;); background-position: 0px -234px; background-size: 26px 260px; background-repeat: no-repeat; display: inline-block;"></i></div></div>
                    <div class="main-status-section4-2-1"><div><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/U0nt1n3ZL3O.png&quot;); background-position: 0px -104px; background-size: 26px 280px; background-repeat: no-repeat; display: inline-block;"></i></div></div>
                    <div class="main-status-section4-2-1"><div><i data-visualcompletion="css-img" class="hu5pjgll bixrwtb6" style="height: 24px; width: 24px; background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/AkEan132Ikr.png&quot;); background-position: 0px -164px; background-size: 34px 1638px; background-repeat: no-repeat; display: inline-block;"></i></div></div>

                </div>
            </div>
            <!--  -->
            <div class="main-status-section5">
                <button disabled style="font-size: 14px;padding:0 12px;height: 100%;width: 100%;border-radius: 8px;border:none;outline:none;" class="main-button-section5">Post</button>
            </div>
        </div>
    </div>
    <!--  -->
    <script>
        $(".enter-content-status").on("keyup", function() {
            if($(this).val()=="") {
                $(".main-button-section5").attr("disable",true).css({"background-color":"#505151","color":"#858686","cursor":"not-allowed"})
            }
            else {
                $(".main-button-section5").removeAttr("disable").css({"background-color":"rgb(45, 136, 255)","color":"#ffffff","cursor":"pointer"})

            }
        })
        $(".close-status").on("click", function() {
            $(".post-status").css({"display":"none"})
            $(".blur-aovcl").css({"display":"none"})
        })
        
    </script>
    <!--  -->
    
    <!--  -->
   
    
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <script>
        $(window).on("load", function() {
            $.ajax({
                url: "home.php",
                method: "GET",
                success: function(result) {
                    $("._8_sp_lg").html(result)
                }
            })
        })
    </script>
    <div id="main" style="position: relative !important;">

        <style>
            .dialog-logout * {
                font-family: sans-serif !important;
            }

            ._8epx {
                align-self: center !important;
            }

            @media screen and (min-width: 1200px) {
                ._9epx {
                    padding-left: 105px !important;
                }
            }
        </style>
        <div class="dialog-logout" style="display: none">
            <div class="dialog-logout-1">
                <div class="dialog-logout-1-1">

                    <h1 data-it-root="Are you sure you want to log out ?" data-it="Bạn có chắc muốn đăng xuất không" class="dialog-logout-1-1-1 lang">Are you sure want to log out ?</h1>
                </div>
                <div class="dialog-logout-1-2">
                    <!-- Yes -->
                    <div class="dialog-logout-1-2-1">
                        <p data-it-root="Yes" data-it="Có" class="dialog-logout-1-2-1-1 lang">Yes</p>
                    </div>
                    <!-- No -->
                    <div class="dialog-logout-1-2-2">
                        <p data-it-root="No" data-it="Không" class="dialog-logout-1-2-2-1 lang">No</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @media screen and (max-width: 500px) {
                .s9tcezmb {
                    width: 90% !important;
                }
            }
        </style>
        
        <div class="header-fixed">




            <div class="header-fixed-supervippro">
                <div class="_12epx">
                    <div class="_12epx_1"><img src="c-programe.png" alt="" width="40px" height="40px"></div>
                    <div class="_12epx_2">
                        <style>
                            .l2qw32fc {
                                transition: all 0.35s linear;

                            }
                        </style>

                        <i class="lucasV" data-visualcompletion="css-img" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:-72px -176px;background-size:190px 212px;width:16px;height:16px;background-repeat:no-repeat;display:inline-block;filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(93deg) brightness(103%) contrast(103%);z-index: 10000"></i>

                        <input class="search lucasV" type="text" name="search-result" placeholder="Search Cockbook">
                    </div>
                </div>
                <div class="_9epx">
                    <ul class="_9epx_1">
                        <li class="_9epx_2 _75_re_21_sa_1 lucasV"><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:-44px -132px;background-size:190px 212px;width:20px;height:20px;background-repeat:no-repeat;display:inline-block"></i>
                            <div class="_13_fr_ya_1 lucasV">Menu</div>
                        </li>
                        <li class="_9epx_2 _75_re_21_sa_2 lucasV"><svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                                <path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z">
                                </path>

                            </svg>
                            <div class="_13_fr_ya_2 lucasV">Messenger</div>
                        </li>
                        <li class="_9epx_2 _75_re_21_sa_3 lucasV"><svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                                <path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z">
                                </path>
                            </svg>
                            <div class="_13_fr_ya_3 lucasV">Notifications</div>
                        </li>
                        <li class="_9epx_2 _75_re_21_sa_4 lucasV">
                            <i data-clicked="no" data-visualcompletion="css-img" class="hu5pjgll lzf7d lucasV6o1 opiasq1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:-44px -154px;background-size:190px 212px;width:20px;height:20px;background-repeat:no-repeat;display:inline-block;padding:10px"></i>
                            <div data-it-root="Account" data-it="Tài khoản" class="_13_fr_ya_4 lang">Account</div>

                            <div style="display: none;transition: transform 0.25s linear;border: 1px solid #333435;opacity:1;transition: opacity 0s linear !important" class="_13_ac_st_1">
                                <!--  -->
                                <!--  -->
                                <!--  -->
                                <!--  -->
                                <section class="_13_fr_ya_4_pr_f-1">
                                    <img class="_13_fr_ya_4_11" src="https://scontent.fhph1-3.fna.fbcdn.net/v/t1.6435-1/cp0/c0.0.86.86a/p86x86/115766767_344381379910345_2906344814977556019_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=RJrjTpsbUZoAX-zW2iA&_nc_ht=scontent.fhph1-3.fna&oh=d9d84627b414b4189580d37a35f5c11d&oe=618A0C15" alt="" width="60px" height="60px">
                                    <section class="_13_fr_ya_4_12">
                                        <p class="_13_fr_ya_4_12_1">
                                            <?php echo $name_login ?>
                                        </p>
                                        <p data-it-root="See your profile" data-it="Xem trang cá nhân của bạn" class="_13_fr_ya_4_12_2 lang" style="font-weight: lighter !important">
                                            See your profile
                                        </p>
                                    </section>
                                </section>
                                <section class="_5_iogh_qw">

                                    <section class="_13_fr_ya_4_pr_f-2">
                                        <section class="_13_fr_ya_4_pr_f-2_no">

                                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Xr6MLEZDZKD.png&quot;); background-position: 0px -214px; background-size: 26px 496px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-2-2">
                                            <p data-it-root="Give Feedback" data-it="Gửi phản hồi" class="_13_fr_ya_4_pr_f-2-2-1 lang">
                                                Give Feedback
                                            </p>
                                            <p data-it-root=" Help us improve the new Cockbook" data-it="Trợ giúp và Ủng hộ" class="_13_fr_ya_4_pr_f-2-2-2 lang" style="font-weight: lighter !important">
                                                Help us improve the new Cockbook
                                            </p>
                                        </section>
                                    </section>
                                </section>
                                <section class="_13_fr_ya_4_pr_f-3">
                                    <section class="_13_fr_ya_4_pr_f-3-1 oisrhiora">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/tBr7iKHYsZc.png&quot;); background-position: -22px -438px; background-size: 50px 576px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                            </section>
                                            <p data-it-root="Setting & Privacy" data-it="Cài đặt & Quyền bảo mật" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 lang">Setting & Privacy</p>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-3-1-2">
                                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -74px -48px; background-size: 190px 212px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <section class="_13_fr_ya_4_pr_f-3-1 tuitjroign">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Xr6MLEZDZKD.png&quot;); background-position: 0px -346px; background-size: 26px 496px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i> </section>
                                            <p data-it-root="Help & Support" data-it="Trợ giúp và Ủng hộ" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2">Help & Support</p>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-3-1-2">
                                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -74px -48px; background-size: 190px 212px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <section class="_13_fr_ya_4_pr_f-3-1">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1 _vp_12_q2">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/Xqj6PfAeyFb.png&quot;); background-position: 0px -138px; background-size: 34px 276px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i> </section>
                                            <p data-it-root="Display & Accessibility" data-it="Hiển thị và Quyền truy cập" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 lang">Display & Accessibility</p>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-3-1-2">
                                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -74px -48px; background-size: 190px 212px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <section class="_13_fr_ya_4_pr_f-3-1">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Xr6MLEZDZKD.png&quot;); background-position: 0px -236px; background-size: 26px 496px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                            </section>
                                            <p data-it-root="Log Out" data-it="Đằng xuất" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 lang">Log Out</p>
                                        </section>

                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                </section>
                                <p class="_12_hhtds_1" style="font-size:12px;color:#b0b3b8;font-family:sans-serif !important">Cockbook &copy 2021, All rights reserved</p>
                            </div>
                            <style>
                                ._14_ac_st_1 {
                                    position: absolute;
                                    margin-right: -1000px;
                                    transition: all 0.35s linear;
                                }
                            </style>


                            <div class="_14_ac_st_1">
                                <!--  -->
                                <!--  -->
                                <section class="_14_ac_st_1_1">
                                    <section class="_14_ac_st_1_1_1 _5678 ukfdhgeuidfh" style="background-color: unset">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: 0px -88px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;transform: scale(1.25)"></i>
                                    </section>
                                    <p data-it-root="Display & Accessibility" data-it="Hiển thị và Quyền truy cập" style="font-size:24px;font-weight:900;font-family:san-serif" class="_14_ac_st_1_1_2 lang">Display & Accessibility</p>
                                </section>
                                <!--  -->
                                <!--  -->
                                <section class="_14_ac_st_1_1">
                                    <section class="_14_ac_st_1_1_1 _5678">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/Xqj6PfAeyFb.png&quot;); background-position: 0px -138px; background-size: 34px 276px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>

                                    <p data-it-root="Dark Mode" data-it="Chế độ tối" class="_14_ac_st_1_1_2 lang">Dark Mode</p>


                                </section>
                                <!--  -->
                                <!--  -->
                                <style>
                                    ._14_ac_st_1_3,
                                    ._14_ac_st_1_4 {
                                        display: flex;
                                        flex-direction: row-reverse;
                                        margin-left: auto;
                                        margin-right: 0;
                                        justify-content: flex-end;
                                        padding: 16px 16px 8px 8px;
                                        border-radius: 7px;
                                    }

                                    ._14_ac_st_1_3:hover,
                                    ._14_ac_st_1_4:hover {
                                        background-color: #3a3b3c
                                    }

                                    ._14_ac_st_1_3_1,
                                    ._14_ac_st_1_4_1 {
                                        display: flex;
                                        justify-content: flex-end;
                                    }

                                    ._14_ac_st_1_3,
                                    ._14_ac_st_1_4 {
                                        display: flex;
                                        align-items: center;
                                        padding-bottom: 16px
                                    }

                                    .supersunday {
                                        background-color: #ffffff !important;
                                    }

                                    ._13_ac_st_1 {}
                                </style>
                                <section class="_14_ac_st_1_3" style="width:85%">
                                    <section class="_14_ac_st_1_3_1" style="width: 100%;">
                                        <input style="cursor:pointer;transform: scale(1.25);width:100%;padding:16px 0 !important" name="modevippro" type="radio" id="light_mode" class="iorueroiqa" value="light">
                                    </section>
                                    <section class="_14_ac_st_1_3_2">
                                        <span data-it-root="Off" data-it="Tắt" class="_14_ac_st_1_3_2_1 lang">Off</span>
                                    </section>
                                </section>
                                <!--  -->
                                <!--  -->
                                <section class="_14_ac_st_1_4" style="width:85%;padding-bottom:16px !important">
                                    <section class="_14_ac_st_1_4_1" style="width: 100%;">
                                        <input style="cursor:pointer;transform: scale(1.25);width:100%" name="modevippro" checked type="radio" id="dark_mode" value="dark">
                                    </section>
                                    <section class="_14_ac_st_1_4_2">
                                        <span data-it-root="On" data-it="Bật" class="_14_ac_st_1_4_2_1 lang">On</span>
                                    </section>
                                </section>
                                <style>
                                    .djkhgjfd {
                                        border-bottom: 1px solid #f1f2f5 !important;
                                    }

                                    .jsdiofdhj {
                                        background-color: #ffffff !important;
                                    }
                                </style>

                                <!--  -->






                            </div>
                        </li>
                    </ul>
                    <script>
                        $(".opiasq1").ready(function() {


                            $(".opiasq1").on("click", function() {
                                if ($("._13_ac_st_1").css("display") == "block") {
                                    $("._13_ac_st_1").css({
                                        "display": "none"
                                    })
                                    $(this).css({
                                        "filter": "invert(96%) sepia(1%) saturate(5193%) hue-rotate(192deg) brightness(103%) contrast(83%)"
                                    })
                                    $("._75_re_21_sa_4").css({
                                        "background-color": "#3a3b3c"
                                    })


                                } else {
                                    $("._75_re_21_sa_4").css({
                                        "background-color": "#263851"
                                    })
                                    $(this).css({
                                        "filter": "invert(38%) sepia(82%) saturate(1060%) hue-rotate(192deg) brightness(102%) contrast(99%)"
                                    })
                                    $("._13_ac_st_1").css({
                                        "display": "block"
                                    })
                                }
                            })

                        })
                    </script>
                </div>



            </div>
            <div class="_12epx">
                <div class="_12epx_1"><img src="c-programe.png" alt="" width="40px" height="40px"></div>
                <div class="_12epx_2">
                    <style>
                        .l2qw32fc {
                            transition: all 0.35s linear;
                        }
                    </style>

                    <i data-visualcompletion="css-img" class="m6k467ps l2qw32fc" style="filter: invert(100%) sepia(12%) saturate(2%) hue-rotate(335deg) brightness(103%) contrast(101%);background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:-72px -176px;background-size:190px 212px;width:16px;height:16px;background-repeat:no-repeat;display:inline-block;z-index:10000"></i>

                    <input class="search lucasV" type="text" name="search-result" placeholder="Search Cockbook">
                </div>
            </div>

            <div class="_8epx">
                <ul class="_8epx_1">
                    <li class="_8epx_2 _17ev_or_1 please"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 aaxa7vy3" height="28" width="28">
                            <path d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29">
                            </path>
                        </svg>
                        <div class="_8epx_2_12pcx_1 lang" data-it-root="Home" data-it="Trang chủ">Home</div>
                    </li>
                    <li class="_8epx_2 _17ev_or_2"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                            <path d="M20.34 22.428c.077-.455.16-1.181.16-2.18 0-1.998-.84-3.981-2.12-5.41-.292-.326-.077-.838.36-.838h2.205C24.284 14 27 16.91 27 20.489c0 1.385-1.066 2.51-2.378 2.51h-3.786a.496.496 0 01-.495-.571zM20 13c-1.93 0-3.5-1.794-3.5-4 0-2.467 1.341-4 3.5-4s3.5 1.533 3.5 4c0 2.206-1.57 4-3.5 4zm-9.5-1c-2.206 0-4-2.019-4-4.5 0-2.818 1.495-4.5 4-4.5s4 1.682 4 4.5c0 2.481-1.794 4.5-4 4.5zm2.251 2A6.256 6.256 0 0119 20.249v1.313A2.44 2.44 0 0116.563 24H4.438A2.44 2.44 0 012 21.562v-1.313A6.256 6.256 0 018.249 14h4.502z"></path>
                        </svg>
                        <div class="_8epx_2_12pcx_2 lang" data-it-root="Friends" data-it="Bạn bè">Friends</div>
                    </li>
                    <li class="_8epx_2 _17ev_or_3"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                            <path d="M5 3.25v-1a.75.75 0 011.5 0v1a.75.75 0 01-1.5 0zm1.5 12.001a.75.75 0 01-1.5 0V8.749a.75.75 0 011.5 0v6.502zM5.75 20a.75.75 0 01.75.75v6.5a.75.75 0 01-1.5 0v-6.5a.75.75 0 01.75-.75zM24.857 5.328a.745.745 0 01.105.674L22.99 12l1.973 6.015a.75.75 0 01-.712.984H4.75a.75.75 0 010-1.5H7.5A.5.5 0 008 17V7.018a.5.5 0 00-.5-.5H4.75a.75.75 0 01-.003-1.5l4-.018c.078.01.11.006.164.018h15.34a.75.75 0 01.606.31z"></path>
                        </svg>
                        <div class="_8epx_2_12pcx_3 lang" data-it-root="Pages" data-it="Trang">Pages</div>
                    </li>
                    <li class="_8epx_2 _17ev_or_4"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                            <path d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.164 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.164 11.654C17.612 11.924 17.612 12.575 17.164 12.846M21.75 2.75 6.25 2.75C4.182 2.75 2.5 4.432 2.5 6.5L2.5 18C2.5 20.068 4.182 21.75 6.25 21.75L21.75 21.75C23.818 21.75 25.5 20.068 25.5 18L25.5 6.5C25.5 4.432 23.818 2.75 21.75 2.75"></path>
                        </svg>
                        <div class="_8epx_2_12pcx_4 lang" data-it-root="Watch" data-it="Watch">Watch</div>
                    </li>
                    <li class="_8epx_2 _17ev_or_5 thursday"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                            <path d="M21.877 19 21.364 19C21.139 19 20.971 18.802 20.996 18.577 21.01 18.461 21.017 18.342 21.017 18.221L21.017 17.724C21.017 16.568 20.667 15.491 20.066 14.591 19.899 14.338 20.067 14 20.369 14L20.521 14C22.274 14 23.5 15.492 23.5 17.327 23.5 18.25 22.772 19 21.877 19ZM17.75 10.75C17.75 9.384 18.535 8.5 19.75 8.5 20.965 8.5 21.75 9.384 21.75 10.75 21.75 11.991 20.853 13 19.75 13 18.647 13 17.75 11.991 17.75 10.75ZM19.5 18.221C19.5 19.202 18.682 20 17.678 20L10.323 20C9.317 20 8.5 19.202 8.5 18.221L8.5 17.724C8.5 15.395 10.442 13.5 12.828 13.5L15.173 13.5C17.559 13.5 19.5 15.395 19.5 17.724L19.5 18.221ZM6.25 10.75C6.25 9.384 7.035 8.5 8.25 8.5 9.465 8.5 10.25 9.384 10.25 10.75 10.25 11.991 9.353 13 8.25 13 7.147 13 6.25 11.991 6.25 10.75ZM7.934 14.591C7.334 15.491 6.983 16.568 6.983 17.724L6.983 18.221C6.983 18.342 6.991 18.461 7.004 18.577 7.03 18.802 6.861 19 6.637 19L6.123 19C5.228 19 4.5 18.25 4.5 17.327 4.5 15.492 5.727 14 7.479 14L7.631 14C7.933 14 8.102 14.338 7.934 14.591ZM14 6C15.697 6 16.75 7.15 16.75 9 16.75 10.655 15.517 12 14 12 12.484 12 11.25 10.655 11.25 9 11.25 7.15 12.304 6 14 6ZM14 1C6.832 1 1 6.832 1 14 1 21.169 6.832 27 14 27 21.169 27 27 21.169 27 14 27 6.832 21.169 1 14 1Z"></path>
                        </svg>
                        <div class="_8epx_2_12pcx_5 lang" data-it-root="Groups" data-it="Nhóm">Groups</div>
                    </li>
                    <style>
                        ._7seven_epx_1 {
                            display: none !important;
                        }
                    </style>
                    <li class="_8epx_2 _17ev_or_5 _7seven_epx_1"><svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28">
                            <path d="M23.5 4a1.5 1.5 0 110 3h-19a1.5 1.5 0 110-3h19zm0 18a1.5 1.5 0 110 3h-19a1.5 1.5 0 110-3h19zm0-9a1.5 1.5 0 110 3h-19a1.5 1.5 0 110-3h19z"></path>
                        </svg>
                        <div class="_8epx_2_12pcx_5 lang" data-it-root="More" data-it="Thêm">More</div>
                    </li>

                </ul>
            </div>
            <div class="_9epx">
                <ul class="_9epx_1">
                    <li class="_9epx_2 _75_re_21_sa_1 lucasV"><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:-44px -132px;background-size:190px 212px;width:20px;height:20px;background-repeat:no-repeat;display:inline-block"></i>
                        <div class="_13_fr_ya_1 lucasV">Menu</div>
                    </li>
                    <li class="_9epx_2 _75_re_21_sa_2 lucasV"><svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                            <path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z">
                            </path>

                        </svg>
                        <div class="_13_fr_ya_2 lucasV">Messenger</div>
                    </li>
                    <li class="_9epx_2 _75_re_21_sa_3 lucasV"><svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                            <path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z">
                            </path>
                        </svg>
                        <div class="_13_fr_ya_3 lucasV">Notifications</div>
                    </li>
                    <li class="_9epx_2 _75_re_21_sa_4 lucasV">
                        <i data-clicked="no" data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1 opiasq1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:-44px -154px;background-size:190px 212px;width:20px;height:20px;background-repeat:no-repeat;display:inline-block;padding:10px"></i>
                        <div class="_13_fr_ya_4 lucasV">Account</div>
                        <section class="yhsuidhsdka" style="position: relative">

                            <section style="display: none;transition: transform 0.25s linear;border: 1px solid #333435;opacity:1;transition: opacity 0s linear !important" class="_13_ac_st_1">
                                <!--  -->
                                <!--  -->
                                <!--  -->
                                <!--  -->
                                <section class="_13_fr_ya_4_pr_f-1">
                                    <img class="_13_fr_ya_4_11" src="https://scontent.fhph1-3.fna.fbcdn.net/v/t1.6435-1/cp0/c0.0.86.86a/p86x86/115766767_344381379910345_2906344814977556019_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=RJrjTpsbUZoAX-zW2iA&_nc_ht=scontent.fhph1-3.fna&oh=d9d84627b414b4189580d37a35f5c11d&oe=618A0C15" alt="" width="60px" height="60px">
                                    <section class="_13_fr_ya_4_12">
                                        <p class="_13_fr_ya_4_12_1">
                                            <?php echo $name_login ?>
                                        </p>
                                        <p class="_13_fr_ya_4_12_2 lang" style="font-weight: lighter !important" data-it-root="See your profile" data-it="Xem trang cá nhân của bạn">
                                            See your profile
                                        </p>
                                    </section>
                                </section>
                                <section class="_5_iogh_qw">

                                    <section class="_13_fr_ya_4_pr_f-2">
                                        <section class="_13_fr_ya_4_pr_f-2_no">

                                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Xr6MLEZDZKD.png&quot;); background-position: 0px -214px; background-size: 26px 496px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-2-2">
                                            <p data-it-root="Give Feeback" data-it="Gửi phản hồi" class="_13_fr_ya_4_pr_f-2-2-1 lang">
                                                Give Feedback
                                            </p>
                                            <p data-it-root="Help us improve the new Cockbook" data-it="Giúp chúng tôi cải tiến Cockbook mới" class="_13_fr_ya_4_pr_f-2-2-2 lang" style="font-weight: lighter !important">
                                                Help us improve the new Cockbook
                                            </p>
                                        </section>
                                    </section>
                                </section>
                                <section class="_13_fr_ya_4_pr_f-3">
                                    <section class="_13_fr_ya_4_pr_f-3-1 oisrhiora">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/tBr7iKHYsZc.png&quot;); background-position: -22px -438px; background-size: 50px 576px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                            </section>
                                            <p data-it-root="Setting & Privacy" data-it="Cài đặt và Quyền bảo mật" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 lang">Setting & Privacy</p>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-3-1-2">
                                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -74px -48px; background-size: 190px 212px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <section class="_13_fr_ya_4_pr_f-3-1 tuitjroign">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Xr6MLEZDZKD.png&quot;); background-position: 0px -346px; background-size: 26px 496px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i> </section>
                                            <p style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 lang" data-it-root="Help & Support" data-it="Trợ giúp và Ủng hộ">Help & Support</p>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-3-1-2">
                                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -74px -48px; background-size: 190px 212px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <section class="_13_fr_ya_4_pr_f-3-1 dtkgjdiwe">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1 _vp_12_q2">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/Xqj6PfAeyFb.png&quot;); background-position: 0px -138px; background-size: 34px 276px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i> </section>
                                            <p data-it-root="Display & Accessibility" data-it="Hiển thị và Quyền truy cập" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 lang">Display & Accessibility</p>
                                        </section>
                                        <section class="_13_fr_ya_4_pr_f-3-1-2">
                                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -74px -48px; background-size: 190px 212px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                        </section>
                                    </section>
                                    <!--  -->
                                    <!--  -->
                                    <!--  -->
                                    <section class="_13_fr_ya_4_pr_f-3-1 iodufhjio">
                                        <section class="_13_fr_ya_4_pr_f-3-1-1">
                                            <section class="_13_fr_ya_4_pr_f-3-1-1-1">
                                                <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/Xr6MLEZDZKD.png&quot;); background-position: 0px -236px; background-size: 26px 496px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                            </section>
                                            <p data-it-root="Log out" data-it="Đăng xuất" style="font-size:14px" class="_13_fr_ya_4_pr_f-3-1-1-2 ioterujiw lang">Log Out</p>
                                        </section>

                                    </section>

                                    <!--  -->

                                    <!--  -->
                                    <!--  -->

                                </section>
                                <p class="_12_hhtds_1" style="font-size:12px;color:#b0b3b8;font-family:sans-serif !important">Cockbook &copy 2021, All rights reserved</p>
                            </section>
                            <style>
                                .lskhnijedn {
                                    transform: translateX(100%) translateZ(1px) !important;
                                    opacity: 0;
                                    width: 360px;
                                    height: auto;
                                    background: #242526;
                                    padding-bottom: 8px;
                                    border-radius: 10px;
                                    border: 1px solid #333435;
                                    top: 44px;
                                    transition: transform 0.5s linear !important
                                }

                                .lskhnijedn * {
                                    font-family: sans-serif !important;
                                    color: #e4e6eb;
                                    text-transform: capitalize;
                                }

                                .lskhnijedn-1 {
                                    padding: 8px 16px 16px 16px;
                                }

                                .qwwsd {
                                    padding: 8px 16px;

                                }

                                .qwwsd section {
                                    background: #3a3b3c;
                                }

                                .qwwsd {
                                    border-radius: 7px;
                                    transition: background 0.25s linear
                                }

                                .qwwsd:hover {
                                    background: #3a3b3c;

                                }

                                .lskhnijedn>section>section {
                                    width: 36px;
                                    height: 36px;
                                    border-radius: 50%;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    transition: all 0.25s linear;
                                }

                                .lskhnijedn>section>section:first-of-type:hover {
                                    background-color: #3a3b3c;
                                }

                                .lskhnijedn>section {
                                    display: flex;
                                    flex-direction: row;
                                    align-items: center;
                                    gap: 10px;
                                }

                                .lskhnijedn>section p {
                                    font-weight: 600;
                                }
                            </style>
                            <section class="lskhnijedn" style="position: absolute;right:0;transform:translateX(0)">
                                <section class="lskhnijedn-1">
                                    <section class="lskhnijedn-1-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/7u4uzzx8ZWO.png&quot;); background-position: -152px -48px; background-size: 190px 194px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>
                                    <p class="lskhnijedn-1-2" style="font-size: 24px;font-weight: 700">Help & Support</p>
                                </section>
                                <section class="lskhnijedn-2 qwwsd">
                                    <section class="lskhnijedn-2-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/i9ASPgphOU3.png&quot;); background-position: 0px -218px; background-size: 26px 400px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>
                                    <p class="lskhnijedn-2-2">help center</p>
                                </section>
                                <section class="lskhnijedn-3 qwwsd">
                                    <section class="lskhnijedn-3-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/VPgqy-z7aAG.png&quot;); background-position: 0px -562px; background-size: 26px 1054px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>
                                    <p class="lskhnijedn-3-2">support inbox</p>
                                </section>
                                <section class="lskhnijedn-4 qwwsd">
                                    <section class="lskhnijedn-4-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/aZV86fX9r3f.png&quot;); background-position: 0px -146px; background-size: 34px 262px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>
                                    <p class="lskhnijedn-4-2">report a problem</p>
                                </section>

                            </section>
                        </section>
                        <style>
                            ._14_ac_st_1 {
                                position: absolute;
                                margin-right: -1000px;
                                transition: all 0.35s linear;
                            }
                        </style>
                        <div class="_14_ac_st_1">
                            <!--  -->
                            <!--  -->
                            <section class="_14_ac_st_1_1">
                                <section class="_14_ac_st_1_1_1 _5678 ukfdhgeuidfh" style="background-color: unset">
                                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: 0px -88px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;transform: scale(1.25)"></i>
                                </section>
                                <p style="font-size:24px;font-weight:900;font-family:san-serif" data-it-root="Display & Accessibility" data-it="Hiển thị và Quyền truy cập" class="_14_ac_st_1_1_2 lang">Display & Accessibility</p>
                            </section>
                            <!--  -->
                            <!--  -->
                            <section class="_14_ac_st_1_1">
                                <section class="_14_ac_st_1_1_1 _5678">
                                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/Xqj6PfAeyFb.png&quot;); background-position: 0px -138px; background-size: 34px 276px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </section>

                                <p data-it-root="Dark mode" data-it="Chế độ tối" class="_14_ac_st_1_1_2 lang">Dark Mode</p>


                            </section>
                            <!--  -->
                            <!--  -->
                            <style>
                                ._14_ac_st_1_3,
                                ._14_ac_st_1_4 {
                                    display: flex;
                                    flex-direction: row-reverse;
                                    margin-left: auto;
                                    margin-right: 0;
                                    justify-content: flex-end;
                                    padding: 16px 16px 8px 8px;
                                    border-radius: 7px;
                                }

                                ._14_ac_st_1_3:hover,
                                ._14_ac_st_1_4:hover {
                                    background-color: #3a3b3c
                                }

                                ._14_ac_st_1_3_1,
                                ._14_ac_st_1_4_1 {
                                    display: flex;
                                    justify-content: flex-end;
                                }

                                ._14_ac_st_1_3 {
                                    display: flex;
                                    align-items: center;
                                    padding-bottom: 16px
                                }

                                .supersunday {
                                    background-color: #ffffff !important;
                                }
                            </style>
                            <section class="_14_ac_st_1_3" style="width:85%">
                                <section class="_14_ac_st_1_3_1" style="width: 100%;">
                                    <input style="cursor:pointer;transform: scale(1.25);width:100%;padding:16px 0 !important" type="radio" name="modevippro" id="light_mode" class="iorueroiqa" value="light">
                                </section>
                                <section class="_14_ac_st_1_3_2">
                                    <span data-it-root="Off" data-it="Tắt" class="_14_ac_st_1_3_2_1 lang">Off</span>
                                </section>
                            </section>
                            <!--  -->
                            <!--  -->
                            <section class="_14_ac_st_1_4" style="width:85%">
                                <section class="_14_ac_st_1_4_1" style="width: 100%;">
                                    <input style="cursor:pointer;transform: scale(1.25);width:100%" checked type="radio" name="modevippro" id="dark_mode" value="dark">
                                </section>
                                <section class="_14_ac_st_1_4_2">
                                    <span data-it-root="On" data-it="Bật" class="_14_ac_st_1_4_2_1 lang">On</span>
                                </section>
                            </section>
                            <style>
                                .djkhgjfd {
                                    border-bottom: 1px solid #f1f2f5 !important;
                                }

                                .jsdiofdhj {
                                    background-color: #ffffff !important;
                                }
                            </style>
                            <!--  -->

                            <!--  -->
                            <script>
                                $("#light_mode").on("click", function() {

                                    $(".wrapper").css({
                                        "background-color": "#f0f2f5"
                                    })
                                    $("._7_sp_lg").css({
                                        "background-color": "#f0f2f5"
                                    })
                                    $("*").css({
                                        "color": "#000000"
                                    })
                                    $("._14_ac_st_1").css({
                                        "background-color": "#ffffff"
                                    })
                                    $(".header-fixed").css({
                                        "background-color": "#ffffff",
                                        "border-bottom": "1px solid #ced0d4"
                                    })
                                    $(".search").css({
                                        "background-color": "#ffffff"
                                    })
                                    $("._8_sp_lg").css({
                                        "background-color": "#f0f2f5"
                                    })
                                    $("._9_sp_lg").css({
                                        "background-color": "#f0f2f5"
                                    })
                                    $("._7_sws_1").css({
                                        "border-bottom": "1px solid #ced0d4"
                                    })
                                    $("._13_ac_st_1").css({
                                        "background-color": "#ffffff"
                                    })
                                    $(".search").css({
                                        "background-color": "#f0f2f5"
                                    })
                                    $("._7_sp_lg_su_a_spc").addClass("sduikl17")
                                    $(".story").addClass("storyvippro")
                                    $(".create-status").addClass("storyvippro supersunday")
                                    $(".create-status-1").addClass("djkhgjfd")
                                    $(".item").addClass("supersunday")
                                    $("#content .item").addClass("jsdiofdhj")
                                })
                                $("#dark_mode").on("click", function() {
                                    $(".wrapper").css({
                                        "background-color": "#18191a"
                                    })
                                    $("._7_sp_lg").css({
                                        "background-color": "#18191a"
                                    })
                                    $("*").css({
                                        "color": "#242526"
                                    })
                                    $("._14_ac_st_1").css({
                                        "background-color": "#242526"
                                    })
                                    $(".header-fixed").css({
                                        "background-color": "#242526",
                                        "border-bottom": "1px solid #363738"
                                    })
                                    $(".search").css({
                                        "background-color": "#242526"
                                    })
                                    $("._8_sp_lg").css({
                                        "background-color": "#18191a"
                                    })
                                    $("._9_sp_lg").css({
                                        "background-color": "#18191a"
                                    })
                                    $("._7_sws_1").css({
                                        "border-bottom": "1px solid #363738"
                                    })
                                    $("._13_ac_st_1").css({
                                        "background-color": "#242526"
                                    })
                                    $(".search").css({
                                        "background-color": "#18191a"
                                    })
                                    $("._7_sp_lg_su_a_spc").removeClass("sduikl17")
                                    $(".story").removeClass("storyvippro")
                                    $(".create-status").removeClass("storyvippro supersunday")
                                    $(".create-status-1").removeClass("djkhgjfd")
                                    $(".item").removeClass("supersunday")
                                })
                            </script>
                        </div>
                        <script>
                            $("._14_ac_st_1_3").on("click", function() {
                                $.ajax({
                                    url: "check_light.php",

                                })
                            })
                            $("._14_ac_st_1_4").on("click", function() {
                                $.ajax({
                                    url: "check_dark.php",
                                })
                            })
                        </script>
                        <script>
                            $("._14_ac_st_1_3").on("click", function() {
                                $.ajax({
                                    url: "check_light_spe.php",

                                })
                            })
                            $("._14_ac_st_1_4").on("click", function() {
                                $.ajax({
                                    url: "check_dark_spe.php",
                                })
                            })
                        </script>
                        <style>
                            .language-setting * {
                                font-family: sans-serif !important;
                                color: #e4e6eb;
                            }

                            .language-setting {
                                border: 1px solid #38393a;
                                display: flex;
                                flex-direction: column;
                                width: 360px;
                                height: auto;
                                background-color: #242526;
                                position: absolute;
                                z-index: 999999999;
                                top: 45px;
                                right: 0;
                                border-radius: 10px;
                                transition: all 0.35s linear;
                            }

                            .language-setting-1-spc {
                                width: 100%;
                                padding: 16px 16px 8px 16px;
                                height: auto;
                                border-radius: 10px;

                            }

                            .language-setting-1-spc .language-setting-1 {
                                width: 100%;
                                display: flex;
                                flex-direction: row;
                                align-items: center;
                                height: auto;
                            }

                            .language-setting-1-1 {
                                width: 36px;
                                height: 36px;
                                display: flex;
                                border-radius: 50%;
                                align-items: center;
                                justify-content: center;
                            }

                            .language-setting-1-1:hover {
                                background-color: #3a3b3c;
                            }

                            .language-setting-1-2 {
                                font-size: 24px;
                                font-weight: bolder;
                            }

                            .language-setting-1 {
                                display: flex;
                                align-items: center;
                                gap: 10px;
                                transition: all 0.2s linear;

                            }

                            .language-setting-2 {
                                padding: 12px 8px;
                                width: 100%;
                            }

                            .language-setting-2>section {
                                padding: 12px 16px;
                                display: flex;
                                flex-direction: row;
                                align-items: center;
                                gap: 10px;
                                width: 100%;
                                border-radius: 10px;
                                transition: all 0.2s linear;
                            }

                            .language-setting-2>section:hover {
                                background-color: #3a3b3c;
                            }

                            .language-setting-2>section>section:first-of-type {
                                width: 36px;
                                height: 36px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                border-radius: 50%;
                                background-color: #3a3b3c;
                            }
                        </style>

                        <section class="language-setting" style="margin-right: -1000px">
                            <section class="language-setting-1-spc">

                                <section class="language-setting-1">
                                    <section class="language-setting-1-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: 0px -88px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>
                                    <section data-it-root="Setting  & Privacy" data-it="Cài đặt và Quyền riêng tư" class="language-setting-1-2 lang">
                                        Setting & Privacy
                                    </section>
                                </section>
                            </section>
                            <section class="language-setting-2" style="position: relative;">
                                <section class="language-setting-2-1">
                                    <section class="language-setting-2-1-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/oi5hr35Fqqg.png&quot;); background-position: 0px -808px; background-size: 26px 1522px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </section>
                                    <section data-it-root="Language" data-it="Ngôn ngữ" class="language-setting-2-1-2 lang">
                                        Language
                                    </section>

                                </section>
                            </section>
                            <nav class="choose-language" style="display: none">
                                <nav class="choose-language-english" style="position:relative;">
                                    <label class="container">
                                        <input type="radio" name="radio" id="1" checked="checked">
                                        <span class="lang-links checkmark lang-en"></span>
                                    </label>
                                    <p style="position:absolute;" class="lang tjsdrhf" data-it-root="English" data-it="Tiếng Anh">English</p>
                                </nav>
                                <nav class="choose-language-vietnamese">
                                    <label class="container">
                                        <input type="radio" name="radio" id="2">
                                        <span class="lang-links checkmark lang-vi"></span>
                                    </label>
                                    <p class="lang" data-it-root="Vietnamese" data-it="Tiếng Việt">Vietnamese</p>
                                </nav>
                            </nav>
                        </section>
                    </li>
                </ul>

            </div>
        </div>

        <!-- execution  -->
        <script>
            $(".tuitjroign").on('click', () => {
                $(".lskhnijedn").addClass("tyodshosdn")
                $(".lskhnijedn").removeClass("jioefhoignfgjn")
                $("._13_ac_st_1").addClass("fjgsgndgngsd")
                $("._13_ac_st_1").removeClass("jgioegjisegjoiser")
            })
            $(".lskhnijedn-1-1").on('click', () => {
                $(".lskhnijedn").removeClass("tyodshosdn")
                $(".lskhnijedn").addClass("jioefhoignfgjn")
                $("._13_ac_st_1").removeClass("fjgsgndgngsd")
                $("._13_ac_st_1").addClass("jgioegjisegjoiser")

            })
        </script>
        <!--  -->
        <style>
            .choose-language {
                position: absolute;
                width: 360px;
                height: auto;
                background-color: #242526;
                left: -101%;
                top: 56%;
                padding: 16px;
                border: 1px solid #333435;
                border-radius: 10px;
            }

            .choose-language>nav {
                padding: 12px 8px;
                border-radius: 10px;
            }

            .choose-language>nav:hover {
                background-color: #3a3b3c;
            }

            .choose-language>nav .container {
                display: inline-block;
                position: relative;
                cursor: pointer;
                font-size: 24px;
                user-select: none;
                padding-left: 40px;
                margin-bottom: 10px;
                padding-right: 270px;
                padding-top: 10px;
            }

            .choose-language>nav .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }

            .choose-language>nav .container .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                width: 24px;
                height: 24px;
                background: #eee;
                border-radius: 50%;
            }

            .choose-language>nav .container:hover .checkmark {
                background: #ccc;
            }

            .choose-language>nav .container .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            .choose-language>nav .container .checkmark::after {
                top: 50%;
                left: 50%;
                width: 15px;
                height: 15px;
                border-radius: 50%;
                border: solid 3px white;
                transform: translate(-50%, -50%) rotate(45deg);
            }

            .choose-language>nav .container input:checked~.checkmark {
                background: #2196F3;
            }

            .choose-language>nav .container input:checked~.checkmark:after {
                display: block;
            }

            .choose-language .choose-language-english p {
                position: absolute;
                right: -14px;
                transform: translate(-50%, -50%);
                top: 32%
            }

            .choose-language .choose-language-vietnamese p {
                position: absolute;
                right: -15px;
                transform: translate(-50%, -50%);
                top: 68%
            }

            .choose-language>nav .container .checkmark {
                margin-top: 1px;
            }
        </style>
        <!--  -->
        <script>

        </script>
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->

        <script>
            $(".dtkgjdiwe").on("click", function() {
                $("._13_ac_st_1").css({
                    "margin-right": "-1000px"
                })
                $("._14_ac_st_1").css({
                    "margin-right": "0"
                })
            })
            $("._14_ac_st_1_1").on("click", function() {
                $("._13_ac_st_1").css({
                    "margin-right": "0px"
                })
                $("._14_ac_st_1").css({
                    "margin-right": "-1000px"
                })
            })
        </script>
        <style>
            ._7_sp_lg_su_a_spc div {
                padding-left: 5px !important
            }

            .friends,
            .pages,
            .watch,
            .groups,
            .profile-id {
                color: #ffffff !important;
                z-index: 0;
                background-color: #18191a;
                width: 100%;
                height: calc(100% - 57px);
                position: absolute;
                top: 57px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding-left: 16px;
                padding-right: 5px;
            }

            .profile-id {
                top: 0;
                height: 100vh;
            }
        </style>
        <!--  -->
        
        <!--  -->
        <div class="friends ueiortu" style="position:relative">
        </div>
        <div class="pages ueiortu"></div>
        <div class="watch ueiortu"></div>
        <div class="groups ueiortu"></div>
        <div class="profile-id ueiortu"></div>
        <!--  -->
        <div class="wrapper">
            <!--  -->
            <div class="_7_sp_lg ">
                <!--  -->
                <div class="_7_sws_1">
                    <div class="_7_sp_lg_su_a_1 _12epx_wq">
                        <img style="border-radius: 50%" class="_7_sp_lg_su_a_1_ie" src="https://scontent.fhph1-3.fna.fbcdn.net/v/t1.6435-1/cp0/c0.0.86.86a/p86x86/115766767_344381379910345_2906344814977556019_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=RJrjTpsbUZoAX-zW2iA&_nc_ht=scontent.fhph1-3.fna&oh=d9d84627b414b4189580d37a35f5c11d&oe=618A0C15" alt="" width="36px" height="36px">
                        <span class="_7_sp_lg_su_a_1_tx"><?php echo $name_login ?></span>
                    </div>
                    <div class="_7_sp_lg_su_a_2 _12epx_wq">
                        <img class="_7_sp_lg_su_a_2_ie" src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/-XF4FQcre_i.png" alt="" width="36px" height="36px">

                        <span data-it-root="find friends" data-it="Tìm kiếm bạn bè" class="_7_sp_lg_su_a_2_tx_2 lang">find friends</span>
                    </div>
                    <div class="_7_sp_lg_su_a_3 _12epx_wq">
                        <img class="_7_sp_lg_su_a_3_ie" src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/mk4dH3FK0jT.png" alt="" width="36px" height="36px">

                        <span data-it-root="groups" data-it="nhóm" class="_7_sp_lg_su_a_3_tx_3 lang">groups</span>
                    </div>
                    <div class="_7_sp_lg_su_a_4 _12epx_wq">
                        <img class="_7_sp_lg_su_a_4_ie" src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/2uPlV4oORjU.png" alt="" width="36px" height="36px">

                        <span data-it-root="saved" data-it="đã lưu" class="_7_sp_lg_su_a_4_tx_4 lang">saved</span>
                    </div>
                    <div class="_7_sp_lg_su_a_5 _12epx_wq">
                        <img class="_7_sp_lg_su_a_5_ie" src="https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/9BDqQflVfXI.png" alt="" width="36px" height="36px">

                        <span class="_7_sp_lg_su_a_5_tx_5">marketplace</span>
                    </div>
                    <div class="_7_sp_lg_su_a_6 _12epx_wq">
                        <img class="_7_sp_lg_su_a_7_ie" src="https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/A1HlI2LVo58.png" alt="" width="36px" height="36px">

                        <span class="_7_sp_lg_su_a_6_tx_6">watch</span>
                    </div>
                    <style>
                        .sduikl17 * {
                            color: #000000 !important;
                        }
                    </style>
                    <div class="_7_sp_lg_su_a_spc" style="width: 100%">

                    </div>
                    <div style="padding-left:5px" class="_7_sp_lg_su_a_7 _12epx_wq yushjdweas">
                        <div class="_7_sp_lg_su_a_7_1" style="width:36px;height:36px;display:flex;justify-content:center;align-items:center;border-radius:50%;background-color:#303031;padding:0;margin:0 !important;">
                            <i data-visualcompletion="css-img" class="mndfsuewa lzf7d6o1" style="transform: rotate(0deg);background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;);filter: invert(100%) sepia(99%) saturate(3%) hue-rotate(45deg) brightness(110%) contrast(100%); background-position: -132px -88px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;color: #ffffff"></i>
                        </div>
                        <span class="_7_sp_lg_su_a_7_tx_7 lang" style="margin:0" data-it-root="see more" data-it="xem thêm">see more</span>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $(".yushjdweas").on("click", function() {
                            $.ajax({
                                url: 'seemore.php',
                                method: 'post',
                                success: function(data) {
                                    if ($("._7_sp_lg_su_a_7_tx_7").html() == "see less") {
                                        $("._7_sp_lg_su_a_spc").css({
                                            "display": "none"
                                        })
                                        $("._7_sp_lg_su_a_7_tx_7").html("see more")
                                        $(".mndfsuewa").css({
                                            "transform": "rotate(0deg)"
                                        })
                                    } else if ($("._7_sp_lg_su_a_7_tx_7").html() == "see more") {
                                        $("._7_sp_lg_su_a_spc").html(data).css({
                                            "display": "flex",
                                            "flex-direction": "column",
                                            "height": "auto",
                                            "justify-content": "flex-start"
                                        })
                                        $("._7_sp_lg_su_a_7_tx_7").html("see less")
                                        $(".mndfsuewa").css({
                                            "transform": "rotate(180deg)"
                                        })
                                    }
                                    // 
                                    else if ($("._7_sp_lg_su_a_7_tx_7").html() == "xem thêm") {
                                        $("._7_sp_lg_su_a_spc").html(data).css({
                                            "display": "flex",
                                            "flex-direction": "column",
                                            "height": "auto",
                                            "justify-content": "flex-start"
                                        })
                                        $("._7_sp_lg_su_a_7_tx_7").html("thu gọn")
                                        $(".mndfsuewa").css({
                                            "transform": "rotate(180deg)"
                                        })
                                    }
                                    // 
                                    else if ($("._7_sp_lg_su_a_7_tx_7").html() == "thu gọn") {
                                        $("._7_sp_lg_su_a_spc").css({
                                            "display": "none"
                                        })
                                        $("._7_sp_lg_su_a_7_tx_7").html("xem thêm")
                                        $(".mndfsuewa").css({
                                            "transform": "rotate(0deg)"
                                        })
                                    }
                                }
                            })
                        })
                    })
                </script>

            </div>
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->

            <style>
                #content {
                    width: 100%;
                    height: inherit;
                }

                #content .item {
                    width: 100%;
                    height: 500px !important;
                    background-color: #242526;
                    border-radius: 10px;
                    margin: 20px 0;
                }

                #content .item .item1 {
                    padding: 12px 16px 0 16px;
                    margin-bottom: 12px;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    align-items: center;
                    gap: 10px
                }

                #content .item .item1 .item1-1 {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    gap: 7px
                }

                #content .item .item1 .item1-1-1 {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%
                }

                #content .item .item1 .item1-1-2 {
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                }

                #content .item .item1 .item1-2 {
                    padding: 7px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    transition: all 0.15s linear;
                    cursor: pointer;
                    position: relative;
                }

                #content .item .item1 .item1-2 .item1-2-2 {
                    user-select: none;
                    width: 312px;
                    border-radius: 8px;
                    border: 2px solid #2d2e2f;
                    right: 0;
                    height: auto;
                    position: absolute;
                    top: 50px;
                    z-index: 1000000000;
                    background-color: #242526;
                }

                #content .item .item1 .item1-2:hover {
                    background-color: #3a3b3c
                }

                #content .item .item1 .item1-2 i {
                    filter: invert(77%) sepia(12%) saturate(75%) hue-rotate(174deg) brightness(87%) contrast(89%);
                }

                #content .item .item1 .item1-1-2 .item1-1-2-2 {
                    display: flex;
                    flex-direction: row;
                    align-content: center;
                    color: #a6a9ad;
                    font-family: sans-serif !important;
                    font-weight: lighter;
                }

                #content .item .item1 .item1-1-2 .item1-1-2-2 i {
                    margin-top: 1px;
                    filter: invert(77%) sepia(12%) saturate(75%) hue-rotate(174deg) brightness(87%) contrast(89%);
                }

                .item1-2-2>div {
                    display: flex;
                    flex-direction: row;
                    padding: 8px;
                    gap: 10px;

                    transition: all 0.2s linear;
                    border-radius: 8px;
                    font-family: sans-serif !important;

                }

                .item1-2-2>div:hover {
                    background: #3a3b3c;

                }

                .item1-2-2 div div {
                    font-size: 14px;
                    color: #e4e8eb;
                    font-weight: 900;
                }

                .item1-2-2 {
                    padding: 8px 4px;
                    flex-direction: column;
                }

                .item5 .item5-spc div {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    gap: 5px
                }

                .item5 .item5-spc div div i {
                    filter: invert(64%) sepia(6%) saturate(144%) hue-rotate(176deg) brightness(89%) contrast(97%);
                }

                .item5 .item5-spc {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                }

                .op6gxeva {
                    margin-top: -2px
                }
            </style>
            <!--  -->
            <script>
                $("._14_ac_st_1_3_1").on("click", function() {
                    $(".wrapper").addClass("_11110").removeClass("_11110-1")
                    $("._7_sp_lg").addClass("_11110").removeClass("_11110-1")
                    $("*").addClass("_11111").removeClass("_11111-1")
                    $("._14_ac_st_1").addClass("_11112").removeClass("_11112-1")
                    $(".header-fixed").addClass("_11113").removeClass("_11113-1")
                    $(".search").addClass("_11112").removeClass("_11112-1")
                    $("._8_sp_lg").addClass("_11110").removeClass("_11110-1")
                    $("._9_sp_lg").addClass("_11110").removeClass("_11110-1")
                    $("._7_sws_1").addClass("_11114").removeClass("_11114-1")
                    $("._13_ac_st_1").addClass("_11112").removeClass("_11112-1")
                    $(".search").addClass("_11110").removeClass("_11110-1")
                    $("._7_sp_lg_su_a_spc").addClass("sduikl17")
                    $(".story").addClass("storyvippro")
                    $(".create-status").addClass("storyvippro supersunday")
                    $(".create-status-1").addClass("djkhgjfd")
                    $(".item").addClass("supersunday")
                    $("#content .item").addClass("jsdiofdhj")
                    $(".search").addClass("piofghjd")
                    $(".l2qw32fc").removeClass("rtyuiedas")
                    $("._7_sws_1").addClass("hfskjfhsoid")
                    $("._13_fr_ya_4_pr_f-3").addClass("yjoritjeoif")
                    $("._13_fr_ya_4_pr_f-2").addClass("jslgjflsdfe")
                    $("._13_fr_ya_4_pr_f-1").addClass("jslgjflsdfe")
                    $(".s9tcezmb").addClass("_11112")
                    $(".nxhoafnm").addClass("piofghjd")
                    $(".s9tcezmb-2-1-2-2").addClass("piofghjd")
                    $("._9_sp_lg").addClass("sdioutrs")
                    $("._7_sp_lg_su_a_spc").addClass("fgukehuiqw")
                    $(".item5-spc-1").addClass("masokfje")
                    $(".l2qw32fc").addClass("hjfgieufh")

                    $("._14_ac_st_1_3 section span").addClass("rueyuerw")
                    $("._14_ac_st_1_4 section span").addClass("rueyuerw")
                })


                //  dark mode
                $("._14_ac_st_1_4_1").on("click", function() {

                    $(".wrapper").addClass("_11110-1").removeClass("_11110")
                    $("._7_sp_lg").addClass("_11110-1").removeClass("_11110")
                    $("*").addClass("_11111-1").removeClass("_11111")
                    $("._14_ac_st_1").addClass("_11112-1").removeClass("_11112")
                    $(".header-fixed").addClass("_11113-1").removeClass("_11113")
                    $(".search").addClass("_11112-1").removeClass("_11112")
                    $("._8_sp_lg").addClass("_11110-1").removeClass("_11110")
                    $("._9_sp_lg").addClass("_11110-1").removeClass("_11110")
                    $("._7_sws_1").addClass("_11114-1").removeClass("_11114")
                    $("._13_ac_st_1").addClass("._11112-1").removeClass("_11112")
                    $(".search").addClass("_11110-1").removeClass("_11110")
                    $("._7_sp_lg_su_a_spc").removeClass("sduikl17")
                    $(".story").removeClass("storyvippro")
                    $(".create-status").removeClass("storyvippro supersunday")
                    $(".create-status-1").removeClass("djkhgjfd")
                    $(".item").removeClass("supersunday")
                    $(".search").removeClass("piofghjd")
                    $(".l2qw32fc").addClass("rtyuiedas")
                    $("._7_sws_1").removeClass("hfskjfhsoid")
                    $("._13_fr_ya_4_pr_f-3").removeClass("yjoritjeoif")
                    $("._13_fr_ya_4_pr_f-2").removeClass("jslgjflsdfe")
                    $("._13_fr_ya_4_pr_f-1 ").removeClass("jslgjflsdfe")
                    $(".s9tcezmb").removeClass("_11112")
                    $(".s9tcezmb-2-1-2-2").removeClass("piofghjd")
                    $("._9_sp_lg").removeClass("sdioutrs")
                    $(".item5-spc-1").removeClass("masokfje")
                    $(".l2qw32fc").removeClass("hjfgieufh")

                    $(".nxhoafnm").removeClass("piofghjd")
                    $("._7_sp_lg_su_a_spc").removeClass("fgukehuiqw")
                    $("._14_ac_st_1_3 section span").removeClass("rueyuerw")
                    $("._14_ac_st_1_4 section span").removeClass("rueyuerw")


                })
            </script>
            <!--  -->
            <!--  -->
            <script>
                $("._7seven_epx_1").on("click", function() {
                    if ($("._7_sp_lg").hasClass("sduigh1 _4_ds_sa_3")) {
                        $("._7_sp_lg").removeClass("sduigh1 _4_ds_sa_3")
                        $("._7_sp_lg").css({
                            "width": "25%"
                        })
                        $("._8_sp_lg").css("display", "flex")
                        $("._9_sp_lg").css("display", "flex")
                    } else {
                        $("._7_sp_lg").addClass("sduigh1 _4_ds_sa_3")
                        $("._7_sp_lg").css({
                            "width": "100%"
                        })
                        $("._8_sp_lg").css("display", "none")
                        $("._9_sp_lg").css("display", "none")
                    }
                })
            </script>
            <!--  -->
            <!--  -->
            <!--  -->

            <!--  -->
            <div class="_8_sp_lg">

            </div>
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->
            <!--  -->

            <div class="_9_sp_lg" style="display:flex;flex-direction: column">
                <div class="_9_sp_lg_ex_1">
                    <div class="_9_sp_lg_ex_ep_1_1">
                        <p class="lang" data-it-root="Sponsored" data-it="Được tài trợ">Sponsored</p>
                    </div>
                    <div class="_9_sp_lg_ex_ep_1_2">

                    </div>
                </div>
                <div class="_9_sp_lg_ex_2">
                    <div class="_9_sp_lg_ex_ep_2_1">
                        <p class="lang" data-it-root="your pages" data-it="Trang của bạn">your pages</p>
                    </div>
                    <div class="_9_sp_lg_ex_ep_2_2">

                    </div>
                </div>
                <div class="_9_sp_lg_ex_3">
                    <div class="_9_sp_lg_ex_ep_3_1">
                        <p class="lang" data-it-root="contacts" data-it="liên hệ">contacts</p>
                    </div>
                    <div class="_9_sp_lg_ex_ep_3_2">

                    </div>
                </div>
                <div class="_9_sp_lg_ex_4">
                    <div class="_9_sp_lg_ex_ep_4_1">
                        <p class="lang" data-it-root="group conversations" data-it="Cuộc trò chuyện nhóm">group conversations</p>
                    </div>
                    <div class="_9_sp_lg_ex_ep_4_2">

                    </div>
                </div>
            </div>
        </div>
        <style>
            .s9tcezmb {
                position: absolute;
                width: 500px;
                border-radius: 10px;
                background-color: #242526;
                font-family: sans-serif !important;
                z-index: 100000;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 1px solid #2d2e2f;
                display: block;
                opacity: 1 !important;
            }

            .s9tcezmb-1 {
                position: relative;
                width: 100%;
                height: 59px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-bottom: 1px solid #2c2d2e;
            }

            .s9tcezmb-1-1 {
                font-size: 20px;
                font-weight: 900;
            }

            .s9tcezmb-1-2 {
                position: absolute;
                right: 7px;
                top: 50%;
                transform: translate(-50%, -50%);
                border-radius: 50%;
                padding: 5px;
                background-color: #3a3b3c;
                transition: all 0.15s linear;
                cursor: pointer;
            }

            .s9tcezmb-1-2:hover {
                background-color: #4B4D4E;
            }

            .s9tcezmb-1-2-1 {
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .s9tcezmb-1-2-1 i {
                filter: invert(98%) sepia(2%) saturate(646%) hue-rotate(187deg) brightness(96%) contrast(91%);



            }

            @media screen and (max-width: 770px) {
                ._8epx_1 li {
                    padding: 0 5px !important;
                }

                .header-fixed {
                    gap: 10px !important;

                }

                .fhjdufheuw {
                    filter: invert(100%) sepia(0%) saturate(1%) hue-rotate(231deg) brightness(102%) contrast(101%) !important;
                }
            }

            .uighduifgdasa {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0;
                right: 0;
                left: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.65)
            }
        </style>
        <div class="uighduifgdasa" style="display:none">

            <div class="s9tcezmb" style="display:none">
                <div class="s9tcezmb-1">
                    <span class="s9tcezmb-1-1 lang" data-it-root="Create post" data-it="Tạo bài viết">Create post</span>
                    <div class="s9tcezmb-1-2">
                        <div class="s9tcezmb-1-2-1" style="width:24px;height: 24px">
                            <i data-visualcompletion="css-img" class="m6k467ps" style="user-select: none;background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -154px -110px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                    </div>
                </div>
                <div class="s9tcezmb-2">
                    <div class="s9tcezmb-2-1" style="display:flex;flex-direction:row;align-items:10px;gap:10px;padding:16px 0;margin:0 16px">
                        <div class="s9tcezmb-2-1-1"><img style="border-radius:50%" src="https://scontent.fhph1-3.fna.fbcdn.net/v/t1.6435-1/cp0/c0.0.86.86a/p86x86/115766767_344381379910345_2906344814977556019_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=dbb9e7&_nc_ohc=RJrjTpsbUZoAX-zW2iA&_nc_ht=scontent.fhph1-3.fna&oh=d9d84627b414b4189580d37a35f5c11d&oe=618A0C15" alt="" width="40px" height="40px"></div>
                        <div class="s9tcezmb-2-1-2" style="display:flex;flex-direction:column">
                            <div class="s9tcezmb-2-1-2-1"><?php echo $name_login ?></div>
                            <div class="s9tcezmb-2-1-2-2" style="cursor:pointer;background-color: #3a3b3c;border-radius:7px;width:max-content !important;padding:4px 8px;font-family:sans-serif !important;font-size:12px;font-weight:600;color:#9b9ca0;display:flex;justify-content:center;align-items:center;gap:5px"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" aria-label="Shared with Public group" role="img" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/woQDhi8VpyK.png&quot;); background-position: 0px -788px; background-size: 26px 928px; width: 12px; height: 12px; background-repeat: no-repeat; display: inline-block;    filter: invert(77%) sepia(12%) saturate(75%) hue-rotate(
                        174deg) brightness(87%) contrast(89%);"></i> <span class="lang" data-it-root="Public" data-it="Công khai" style="font-family:sans-serif !important;font-size:12px;font-weight:600;">Public</span><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: -72px -194px; background-size: 190px 212px; width: 12px; height: 12px; background-repeat: no-repeat; display: inline-block;filter: invert(77%) sepia(12%) saturate(75%) hue-rotate( 
                        174deg) brightness(87%) contrast(89%);"></i> </div>

                        </div>
                    </div>
                    <div class="s9tcezmb-2-2"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("._12epx_2").on("click", function() {
            $(".l2qw32fc").css({
                "opacity": "0"
            })
            $(".search").css({
                "padding-left": "16px"
            })

        })

        $("._12epx_2").on("focusout", function() {
            $(".search").css({
                "padding-left": "36px"
            })
            $(".l2qw32fc").css({
                "opacity": "1"
            })


        })
    </script>
    <script>
        $(".nxhoafnm").on("click", function() {
            $(".s9tcezmb").css({
                "display": "block"
            })
            $(".uighduifgdasa").css({
                "display": "block"
            })
        })
        $(".s9tcezmb-1-2").on("click", function() {
            $(".s9tcezmb").css({
                "display": "none"
            })
            $(".uighduifgdasa").css({
                "display": "none"
            })
        })
    </script>

    <script>
        $(document).click(function(event) {
            if (!$(event.target).closest(".item1-2,.item1-2-2,.item1-2,._13_ac_st_1,.opiasq1,._14_ac_st_1,.language-setting-1-spc,.language-setting").length) {
                $("._13_ac_st_1").addClass("ajpiewrj")
                $(".opiasq1").addClass("dgfgfd")
                $("._75_re_21_sa_4").addClass("aioprtyu")
                $(".item1-2-2").addClass("vheouirhbn")
            }
        })
    </script>
    <style>
        @media screen and (max-width:600px) {
            .story {
                width: 100%;
            }

            .story div:not(:first-of-type) {
                width: 48% !important;
                flex-wrap: wrap !important;
            }
        }

        .sjkdfsklj {
            display: block !important;
        }

        .vheouirhbn {
            display: none !important;
        }
    </style>
    <script>
        $(".opiasq1").on("click", function() {
            if ($("._13_ac_st_1").css("display") == "block") {
                $("._13_ac_st_1").removeClass("sjkdfsklj").addClass("ajpiewrj")
            } else {
                $("._13_ac_st_1").addClass("sjkdfsklj").removeClass("ajpiewrj")
                $("._75_re_21_sa_4").removeClass("jglkgjlwfd")

            }
        })
    </script>
    <style>
        .ajpiewrj {
            display: none !important;
        }

        .dgfgfd>i {
            filter: invert(37%) sepia(100%) saturate(851%) hue-rotate(191deg) brightness(103%) contrast(102%) !important;
        }

        .aioprtyu {
            background-color: #3a3b3c !important
        }

        .bkjskgdfs {
            display: none !important;
        }


        /*  */
        .euiryeuo {
            filter: invert(96%) sepia(1%) saturate(5193%) hue-rotate(192deg) brightness(103%) contrast(83%) !important;

        }

        .ifjiroer09 {
            background-color: #3a3b3c !important;
        }

        .gjriofds {
            background-color: #263851 !important;
        }

        .oe8rufd {
            background-color: #263851 !important;
            filter: invert(38%) sepia(82%) saturate(1060%) hue-rotate(192deg) brightness(102%) contrast(99%) !important;

        }

        /*  */

        .jglkgjlwfd {
            background-color: #263851 !important;
        }

        .jglkgjlwfd>i {
            filter: invert(44%) sepia(83%) saturate(2859%) hue-rotate(200deg) brightness(101%) contrast(102%) !important;
        }

        .jglkgjlwfd>svg path {
            fill: #2d86ff !important
        }

        .story>div,
        .create-status {
            background-color: #18191a;

        }

        .item {
            background: #18191a;
        }

        ._8_sp_lg {
            background: #242526
        }
    </style>
    <script>
        $(document).ready(function() {
            $(document).on('click', '._9epx_1 ._9epx_2', function() {
                $(this).addClass("jglkgjlwfd").siblings().removeClass("jglkgjlwfd")
            })
        })
    </script>
    <style>
        ._11110 {
            background-color: #f0f2f5 !important;

        }

        ._11111 {
            color: #000000 !important;

        }

        ._11112 {
            background-color: #ffffff !important;

        }

        ._11113 {
            background-color: #ffffff !important;
            border-bottom: 1px solid #ced0d4 !important;
        }

        ._11114 {
            border-bottom: 1px solid #ced0d4 !important;

        }

        /*  */
        /*  */
        /*  */
        ._11110-1 {
            background-color: #18191a !important;
        }

        ._11111-1 {
            color: #ffffff !important;
        }

        ._11112-1 {
            background-color: #242526 !important;
        }

        ._11113-1 {
            background-color: #242526 !important;
            border-bottom: 1px solid #363738 !important;
        }

        ._11114-1 {
            border-bottom: 1px solid #363738 !important;

        }

        .piofghjd {
            background: #f0f2f5 !important;
        }

        .rtyuiedas {
            filter: invert(41%) sepia(4%) saturate(1047%) hue-rotate(174deg) brightness(99%) contrast(91%) !important;
        }

        .hjfgieufh {
            filter: invert(45%) sepia(3%) saturate(1490%) hue-rotate(177deg) brightness(92%) contrast(90%) !important;
        }
    </style>


    <style>
        .hfskjfhsoid>div:hover {
            background-color: #DBDEE6 !important;
        }

        .yjoritjeoif>section:hover * {
            color: #ffffff !important;

        }

        .jslgjflsdfe:hover * {
            color: #ffffff !important;
        }

        .sdioutrs>div {
            border-bottom: 1px solid #ced0d4 !important;
        }

        .fgukehuiqw>div:hover {
            background-color: #f0f2f5 !important;
        }

        .masokfje {
            border-bottom: 1px solid #ced0d4 !important;
            border-top: 1px solid #ced0d4 !important;
        }

        .rueyuerw {
            color: #ffffff !important;
        }

        .ukfdhgeuidfh:hover {
            background-color: #3a3b3c !important;
        }

        .create-status-1-1 {
            cursor: pointer
        }
    </style>





    <!--  -->


    <!-- Phần phụ -->


    <!--  -->
    <script>
        ///
        $(document).on('click', "._7_sp_lg_su_a_1,.create-status-1-1", function() {
            history.replaceState({}, null, "/cockbook/profile.php?id=<?php echo $id_login ?>")

            $(".wrapper").css({
                "display": "none"
            })
            $(".pages").css({
                "display": "none"
            })
            $(".watch").css({
                "display": "none"
            })
            $(".groups").css({
                "display": "none"
            })
            $(".friends").css({
                "display": "none"
            })
            $(".profile-id").css({
                "display": "flex"
            })
            $.ajax({
                url: 'profiles.php?id=<?php echo $id_login ?>',
                method: 'get',
                success: function(data) {
                    $(".profile-id").html(data)
                }
            })
            $("title").html("<?php echo $name_login ?> | Cockbook")
        })
        /// friends
        $(document).on("click", "._17ev_or_2, ._7_sp_lg_su_a_2", function() {
            history.replaceState({}, null, "/cockbook/friend")
            $(".wrapper").css({
                "display": "none"
            })
            $(".pages").css({
                "display": "none"
            })
            $(".watch").css({
                "display": "none"
            })
            $(".groups").css({
                "display": "none"
            })
            $(".friends").css({
                "display": "flex"
            })
            $(".profile-id").css({
                "display": "none"
            })
            $("title").html("Friends | Cockbook")
            $.ajax({
                url: "/cockbook/friends",
                method: "GET",
                data: "friends",
                success: function(result) {
                    $(".friends").html(result)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $(".friends").html("Hello ")
                }
            })
        })
        // other version send friends
        $("._7_sp_lg_su_a_2").on("click", function() {
            $("body #main .header-fixed ._8epx ._8epx_1 ._17ev_or_2 svg path").css({
                "fill": "#2d88ff"
            })
        })
        $(window).on("click", function() {
            if (!$(event.target).is("._7_sp_lg_su_a_2")) {

                $("body #main .header-fixed ._8epx ._8epx_1 ._17ev_or_2 svg path").css({
                    "fill": "#a5a7ac"
                })
            }
        })
        // 

        //
        $("._17ev_or_1").on("click", function() {
            history.replaceState({}, null, "/cockbook/cockbook.php")
            $(".wrapper").css({
                "display": "flex"
            })
            $(".pages").css({
                "display": "none"
            })
            $(".watch").css({
                "display": "none"
            })
            $(".groups").css({
                "display": "none"
            })
            $(".friends").css({
                "display": "none"
            })
            $(".profile-id").css({
                "display": "none"
            })
            $("title").html("Cockbook")

        })
        // 


        //
        $("._17ev_or_3").on("click", function() {
            history.replaceState({}, null, "/cockbook/pages")
            $(".friends").css({
                "display": "none"
            })
            $(".wrapper").css({
                "display": "none"
            })
            $(".pages").css({
                "display": "flex"
            })
            $(".watch").css({
                "display": "none"
            })
            $(".groups").css({
                "display": "none"
            })
            $(".profile-id").css({
                "display": "none"
            })
            $("title").html("Pages | Cockbook")

        })
        // 


        //
        $(document).on("click", "._17ev_or_4, ._7_sp_lg_su_a_6", function() {
            history.replaceState({}, null, "/cockbook/watch")
            $(".friends").css({
                "display": "none"
            })
            $(".wrapper").css({
                "display": "none"
            })
            $(".pages").css({
                "display": "none"
            })
            $(".watch").css({
                "display": "flex"
            })
            $(".groups").css({
                "display": "none"
            })
            $(".profile-id").css({
                "display": "none"
            })
            $("title").html("Watch | Cockbook")

            $("._7_sp_lg_su_a_6").on("click", function() {
                $("body #main .header-fixed ._8epx ._8epx_1 ._17ev_or_4 svg path").css({
                    "fill": "#2d88ff"
                })
            })
            //


            $(window).on("click", function() {
                if (!$(event.target).is("._7_sp_lg_su_a_6")) {

                    $("body #main .header-fixed ._8epx ._8epx_1 ._17ev_or_4 svg path").css({
                        "fill": "#a5a7ac !important"
                    })
                }
            })
            //

        })
        // 
        $(".thursday").on("click", function() {
            history.replaceState({}, null, "/cockbook/groups")
            $(".friends").css({
                "display": "none"
            })
            $(".wrapper").css({
                "display": "none"
            })
            $(".pages").css({
                "display": "none"
            })
            $(".watch").css({
                "display": "none"
            })
            $(".groups").css({
                "display": "flex"
            })
            $(".profile-id").css({
                "display": "none"
            })
            $("title").html("Groups | Cockbook")

        })
    </script>
    <!--  -->

    <!--  -->
    <style>
        .ueiortu {
            padding: 0;
        }

        @media screen and (max-width: 1200px) {
            .uerhuirfnesd .story {
                order: 2;
            }

            .uerhuirfnesd .create-status {
                order: 1;
            }
        }

        .f890ryudf {
            display: flex !important;
            transition: all 0.35s linear
        }

        .oisrhiora {
            display: flex !important;
        }
    </style>

    <!--  -->
    <script>
        $(".oisrhiora").on("click", function() {
            $("._13_ac_st_1").css({
                "margin-right": "-1000px"
            })
            $(".language-setting").css({
                "margin-right": "0"
            })

        })
        $(".language-setting-1-1").on("click", function() {
            $(".choose-language").css({
                "display": "none"
            })
            $(".language-setting").css({
                "margin-right": "-1000px"
            })
            $("._13_ac_st_1").css({
                "margin-right": "0"
            })
        })
    </script>
    <!--  -->
    <style>
        body #main .header-fixed ._9epx ._9epx_1 ._75_re_21_sa_4 ._13_ac_st_1 {
            top: 45px !important;
        }
    </style>
    <script>

    </script>
    <script>
        $(".iodufhjio").on("click", function() {
            if ($(".dialog-logout").css("display") == "none") {
                $(".dialog-logout").css({
                    "display": "flex"
                })
            } else {
                $(".dialog-logout").css({
                    "display": "none"
                })
            }
        })
        $(".dialog-logout-1-2-2").on("click", function() {
            $(".dialog-logout").css({
                "display": "none"
            })

        })
        $(".dialog-logout-1-2-1").on("click", function() {
            $.ajax({
                url: 'logout.php',
                method: 'POST',
            })
            setTimeout(() => {
                window.location.href = "http://localhost/cockbook/"
            }, 1000)
        })
    </script>
    <!--  -->
    <script>
        $(".language-setting-2-1").on("click", function() {
            if ($(".choose-language").css("display") == "none") {
                $(".choose-language").css({
                    "display": "block"
                })
            } else {
                $(".choose-language").css({
                    "display": "none"
                })
            }
        })
    </script>
    <!--  -->
    <script>
        $(".lang-en").on("click", function() {
            $(".search").attr("placeholder", "Search Cockbook")
            $(".nxhoafnm").attr("placeholder", "What's on your mind, <?php echo $name_single_login ?> ?")
        })
        $(".lang-vi").on("click", function() {
            $(".search").attr("placeholder", "Tìm kiếm trên Cockbook")
            $(".nxhoafnm").attr("placeholder", "<?php echo $name_single_login ?> ơi, bạn đang nghĩ gì thế ?")

        })
    </script>
    <!--  -->

    <script>
        const langs = document.querySelectorAll(".lang")
        const langslink = document.querySelectorAll(".lang-links")

        langslink[1].onclick = function() {
            document.querySelector(".tjsdrhf").style.right = "-31px"
            for (let i = 0; i < langs.length; i++) {
                let langvip1 = langs[i].getAttribute("data-it")
                langs[i].innerHTML = langvip1
            }

        }

        langslink[0].onclick = function() {
            document.querySelector(".tjsdrhf").style.right = "-13px"
            document.querySelector(".tjsdrhf").style.top = "50%"



            for (let i = 0; i < langs.length; i++) {
                let langvip2 = langs[i].getAttribute("data-it-root")
                langs[i].innerHTML = langvip2
            }

        }
    </script>
    <!--  -->
    <style>
        .fjgsgndgngsd {
            transform: translateX(-100%) translateZ(1px);
            opacity: 0 !important;
            transition: transform 0.25s linear;
            transition: opacity 0 ease-out !important;
        }

        .jgioegjisegjoiser {
            transform: translateX(0) translateZ(1px);
            opacity: 1 !important;
            transition: transform 0.25s linear;
            transition: opacity 0 ease-out !important;
        }

        .tyodshosdn {
            transform: translateX(0) translateZ(1px) !important;
            opacity: 1;
            transition: transform 0.25s linear;
            transition: opacity 0.15s ease-in;
        }

        .jioefhoignfgjn {
            transform: translateX(100%) translateZ(1px) !important;
            opacity: 0;
            transition: transform 0.25s linear;
            transition: opacity 0.15s ease-in;
        }

        .please svg path {
            fill: #2d88ff !important;
        }

        @media screen and (max-width: 550px) {}
    </style>
    <script>
        $(".header-fixed div,.header-fixed li").on('click', () => {
            $(".uighduifgdasa").css({
                "display": "none"
            })
        })
    </script>
    <script>
        $("._12epx_1").on('click', function() {
            page= 1
            $(".wrapper").css({
                "display": "flex"
            })
            $(".ueiortu").css({
                "display": "none"
            })
            $.ajax({
                url: "home.php",
                method: "GET",
                success: function(result) {
                    $("._8_sp_lg").empty()
                    $(".lds-ring").css({
                        "margin-top": 0,
                        "opacity": "1"
                    })
                    setTimeout(() => {

                        $(".lds-ring").css({
                            "margin-top": "-200px",
                            "opacity": "0"
                        })
                        $("._8_sp_lg").html(result).scrollTop(0)

                    }, 1500)



                }
            })
        })
        $(window).on("click", function(e) {
            if (!$(event.target).is("._17ev_or_1,._17ev_or_4")) {
                $("._17ev_or_1").removeClass("please")
                $("._17ev_or_4").removeClass("please")
            }

        })
    </script>
<!--  -->
        <style>
            ._9epx_1>li,.search,._12epx_1 {
                position: relative !important;
                z-index: 1000 !important;
        }
        .lusasV {
            position: relative !important; 
            z-index: 1000 !important
        }
        </style>
        <!--  -->
        
<!--  -->
</body>

</html>