<?php
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    sleep(1);
}
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
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