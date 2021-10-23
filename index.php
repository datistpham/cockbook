<!DOCTYPE html>
<html>

<head>
    <title>Cookbook - Login or Signup</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Cock Book - Login or Sign up">
    <meta name=”robots” content="noodp,index,follow" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="content-language" content="en" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous">
    <link rel='shortcut icon' type='image/x-icon' href='c-programe.png' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

        input::placeholder {
            color: #757373;
        }

        #main input:focus {
            outline: none !important;
            border: 1px solid #1877f2;
            box-shadow: 0 0 0 1px #1877f2;
        }

        .sub-signup-1 {
            width: 432px;
            height: auto;
            background-color: rgba(255, 255, 255, 0.8);
        }

        select {
            width: 30%;
            padding: 11px;
            border-radius: 5px;
        }

        select option:hover {
            background-color: #1877f2;
        }

        .form-1-5-1 {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            gap: 5px
        }

        .fa-eye:hover {
            color: #000000 !important;
        }

        * {
            margin: 0;
            padding: 0;
        }

        ._12epx_1 {
            padding: 0 !important;
        }

        .form {
            padding: 0 10px;
        }

        @media screen and (max-width: 1025px) {
            #main {
                width: 100% !important;
            }

            ._8epx {
                width: 100% !important;
            }

            ._12epx {
                width: 100% !important;
            }

            ._12epx_1 {
                width: 100% !important;

            }

            .form {
                width: 100% !important;

            }

            ._12epx>div {
                width: 100% !important;

            }

            ._12epx_2 {
                display: flex;
                justify-content: center;
                align-content: center;

            }

            ._12epx_2 p {
                text-align: center;
            }
        }

        @media only screen and (orientation:landscape) {
            #main {
                display: flex !important;
                margin: 100px;
            }

        }
    </style>
</head>

<body>
    <div id="main">
        <div class="_8epx">
            <div class="_8epx_1">
                <p style="font-size:48px;padding-top:20px" class="_8epx_1_1">
                    cockbook
                </p>
            </div>
            <div class="_8epx_2">
                <p style="font-size:24px" class="_8epx_2_1">
                    Cockbook help you connect and share your life
                    with people
                </p>
            </div>
        </div>
        <div class="_12epx">
            <div class='_12epx_1'>
                <form method="post" class="form">
                    <div style="border: 1px solid #dddfe2;border-radius:5px" class="account">
                        <input id="account-1" title="account" type="text" name="account" placeholder="Enter email or phone number">

                    </div>
                    <div class="lost-account_7spcl">
                        <p style="display:block" class="lost-account_7spcl-1"></p>
                    </div>
                    <div style="border: 1px solid #dddfe2;border-radius:5px;position:relative" class="password">
                        <input style="position:relative" id="password-1" title="password" type="password" name="password" placeholder="Enter password" autocomplete="off">
                        <i title="Show password" id="eye" style="position:absolute;right:0;top:50%;transform: translate(-50%, -50%);color:#3B3A3A;display:none;cursor:pointer" class="fas fa-eye"></i>
                    </div>

                    <script>
                        document.querySelector("#password-1").addEventListener("focus", function() {
                            $("#eye").css({
                                "display": "block"
                            })
                        })
                    </script>





                    <script>
                        document.querySelector("#eye").onclick = () => {
                            document.querySelector("#eye").style.display = "block"
                            if (document.querySelector("#password-1").type == "password") {
                                document.querySelector("#password-1").type = "text"
                            } else {
                                document.querySelector("#password-1").type = "password"
                            }
                        }
                    </script>
                    <div class="lost-password_7spcl">
                        <p style="display:block" class="lost-password_7spcl-1"></p>
                    </div>
                    <div class="lost-cc_7spcl" style="display:flex;flex-direction:row;align-items:center;gap:10px">
                        <div style="width:22px;height:22px;display:flex;align-items:center;justify-content:center">
                            <input id="remember_me" type="checkbox" class="icheck-primary icheck-turquoise ">

                        </div>
                        <div style="display:flex;align-items:center;justify-content:center">Remember me</div>
                    </div>
                    <div class="sendp" style="display: flex;justify-content:center;align-items:center;cursor:pointer">
                        <input style="background-color:#1877f2;color:#fff;font-weight:800;border-radius:5px;font-size:20px;cursor:pointer" type="button" value="Log In" class="send" onclick="return confirm_()">
                    </div>
                    <div class="check_all">
                        <p style="display:block" class="check_all_1"></p>
                    </div>
                </form>
                <div class="forgot-password">
                    <button style="border:none;background:unset;outline:none;color:#1877f2;font-weight:700;cursor:pointer" type="button" class="send-forgot-password">Forgot password</button>
                </div>

                <div style="padding-top:20px;border-bottom: 1px solid #C5C5C5;width:100%;" class="line">

                </div>
                <div style="padding-top:20px;border:none;background:unset;outline:none;color:#1877f2;font-weight:700;;padding-bottom:24px" class="create-account">
                    <button style="font-size:17px;padding:14px 16px;background-color:#42b72a;font-weight:900;border:none;outline:none;border-radius:5px;color:#fff;cursor:pointer;" id="signup" type="button">Create new account</button>
                </div>
            </div>
            <div style="margin-top:28px" class='_12epx_2'>
                <p style><span style="font-weight:900">Create page</span> for famous people,label or enterprise</p>
            </div>
        </div>
    </div>
    <style></style>
    <div class="sub-signup">

    </div>
    <script>
        $(document).ready(function() {
            $("#signup").on('click', function() {
                $(".sub-signup").css({
                    'z-index': '9999',
                    'background-color': 'rgba(255,255,255,0.9)'
                })
                $.ajax({
                    url: 'signup_php.php',
                    method: 'post',
                    success: function(data) {
                        $(".sub-signup").html(data)
                    }
                })
            })
        })
    </script>
    <script>
        function confirm_() {
            if ($("#account-1").val() == "" && $("#password-1").val() == "") {
                $(".lost-account_7spcl-1").html('x Please enter your email or phone number.').css({
                    "color": "red",
                    "display": "block",
                    "font-weight": "600"
                })
                $(".lost-password_7spcl-1").html('x Please enter your password.').css({
                    "color": "red",
                    "display": "block",
                    "font-weight": "600"
                })
                $(".check_all_1").css({
                    "display": "none"
                })
                return false
            }
            if ($("#account-1").val() == "") {
                $(".lost-account_7spcl-1").css({
                    "color": "red",
                    "display": "block",
                    "font-weight": "600"
                }).html('x Please enter your email or phone number.')
                $(".lost-password_7spcl-1").css({
                    "display": "block",
                    "font-weight": "600"
                }).html('')
                $(".check_all_1").css({
                    "display": "none"
                })
                return false

            }
            if ($("#password-1").val() == "") {

                $(".lost-account_7spcl-1").css({
                    "display": "block",
                    "font-weight": "600"
                }).html('')
                $(".lost-password_7spcl-1").html('x Please enter your password.').css({
                    "color": "red",
                    "display": "block",
                    "font-weight": "600"
                })
                $(".check_all_1").css({
                    "display": "none",
                    "font-weight": "600"
                })

                return false
            } else if ($("#account-1").val() != "" && $("#password-1").val() != "") {


                account = $("#account-1").val()
                password = $("#password-1").val()
                $.ajax({
                    url: 'check_login.php',
                    method: 'post',
                    dataType: 'text',
                    data: {
                        account: account,
                        password: password
                    },
                    success: function(result) {
                        $(".check_all_1").css({
                            "display": "block"
                        }).html(result)
                    }
                })
                $(".lost-account_7spcl-1").css({
                    "display": "none",
                    "font-weight": "600"
                })
                $(".lost-password_7spcl-1").css({
                    "display": "none",
                    "font-weight": "600"
                })
                return true
            }
        }
    </script>
    <script>
        const rmCheck = document.getElementById("remember_me"),
            emailInput = document.getElementById("account-1");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
            emailInput.value = "";
        }
        $(".send").on('click', function() {
            if (rmCheck.checked && emailInput.value !== "") {
                localStorage.username = emailInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        })
        
    </script>
</body>

</html>