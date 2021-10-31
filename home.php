<?php
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
}
session_start();
$_SESSION['user'] = $_COOKIE['user'];

require 'connect.php';
$conne = connect();

$detect_account = "SELECT * from user_information where token_user=" . $_SESSION["user"] . ""; // declare 1 row
$detect_account_2 = "SELECT * from user_information where id>1 and id<=5";
$query_de = mysqli_query($conne, $detect_account);
$query_dev = mysqli_query($conne, $detect_account_2);

while ($rowzz = mysqli_fetch_assoc($query_de)) {
    if ($rowzz['token_user'] == $_COOKIE["user"]) {
        $name_single_login = $rowzz['surname'];
        $name_login = $rowzz['surname'] . " " . $rowzz['firstname'];
        $id_login = $rowzz['id'];
        $storyz = $rowzz['story'];
        $avatar = $rowzz['avatar'];
        break;
    }
}
?>
<script>
    if (page == undefined) {
        page = 1
    }
</script>
<div class="_8_sp_lg_su_se">
    <div class="_8_sp_lg_su_se-main">
        <!--  -->
        <!--  -->
        <!--  -->
        
        </style>
        <div id="content">
            <div class="uerhuirfnesd" style="width: 100%;display:flex;flex-direction: column">
                
                <div class="story">
                    <div class="story-i-spc">
                        <p>Story</p>
                    </div>
                    <div class="story1-self">
                        <section class="add-story-self">
                            <svg viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 p361ku9c jnigpg78 odw8uiq3">
                                <g fill-rule="evenodd" transform="translate(-446 -350)">
                                    <g fill-rule="nonzero">
                                        <path d="M95 201.5h13a1 1 0 1 0 0-2H95a1 1 0 1 0 0 2z" transform="translate(354.5 159.5)"></path>
                                        <path d="M102.5 207v-13a1 1 0 1 0-2 0v13a1 1 0 1 0 2 0z" transform="translate(354.5 159.5)"></path>
                                    </g>
                                </g>
                            </svg>
                        </section>
                        <div class="half-self-1">
                            <img src="<?php echo $avatar ?>" alt="">
                        </div>
                        <div class="half-self-2">
                            <p class="fhuedjkdsfarwrdfr">Create story</p>
                        </div>
                    </div>
                    <?php
                    while ($rowxn = mysqli_fetch_assoc($query_dev)) {


                        ?>

                        <div class="storyzz <?php echo $rowxn['account'] ?>">
                            <img src="<?php echo $rowxn['avatar'] ?>" alt="">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
                
                <div class="create-status">
                    <div class="create-status-main">
                        <div class="create-status-1">
                            <div class="create-status-1-1">

                                
                                <img style="border-radius:50%;object-fit:cover" src=<?php echo $avatar?> alt="" width="36px" height="36px">
                            </div>
                            <div class="create-status-1-2">
                                <button class="nxhoafnm" style="padding:10px 12px;border-radius:80px;background-color:#3a3b3c;border:none;outline:none;cursor:pointer">What's on your mind, <?php echo $name_single_login ?> ?</button>
                            </div>
                        </div>
                        <div class="create-status-2" style="user-select: none">
                            <div class="create-status-2-1">
                                <div class="create-status-2-1-spc-1">

                                    <div class="create-status-2-1-spc"><i class="create-status-2-1-1" data-visualcompletion="css-img" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/-5ddrwu0GXQ.png&quot;); background-position: 0px 0px; background-size: 26px 558px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <p data-it-root="Live video" data-it="Video trực tiếp" class="create-status-2-1-2 lang">Live video</p>
                                </div>
                            </div>
                            <div class="create-status-2-2">
                                <div class="create-status-2-2-spc-1">

                                    <div class="create-status-2-2-spc"><i class="create-status-2-2-1" data-visualcompletion="css-img" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/-5ddrwu0GXQ.png&quot;); background-position: 0px -234px; background-size: 26px 558px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <p data-it-root="Photo/Video" data-it="Ảnh/Video" class="create-status-2-2-2 lang">Photo/Video</p>
                                </div>
                            </div>
                            <div class="create-status-2-3">
                                <div class="create-status-2-3-spc-1">

                                    <div class="create-status-2-3-spc"><i class="create-status-2-3-1" data-visualcompletion="css-img" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/-5ddrwu0GXQ.png&quot;); background-position: 0px -26px; background-size: 26px 558px; width: 24px; height: 24px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <p data-it-root="Feeling/Activity" data-it="Cảm xúc/Hoạt động" class="create-status-2-3-2 lang">Feeling/Activity</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="create-room">
                    <div class="hjfdsfdgjfgefdgjdsek">
                        <div class="rgfgdgdsfd">
                            <i data-visualcompletion="css-img" class="hu5pjgll" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/9i4z4VXiZ-Y.png');background-position:0 -220px;background-size:502px 246px;width:24px;height:24px;background-repeat:no-repeat;display:inline-block"></i>
                        </div>
                        <div class="difdfjijffas">
                            <span style="font-family:sans-serif !important;font-weight:lighter;font-size: 14px;color: #2e89ff" class="jdiosdfbdadfs">Create Room</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <!--  -->

            <!--  -->
            <style>
                .bring_to_top {
                    width: 100%;
                    
                }
            </style>
           <div class="bring_to_top">

           </div>
            <div class="wrapper-item">


                <div class="item">
                    <div class="item1" style="margin-bottom:10px">
                        <div class="item1-1">
                            <img style="object-fit:cover" class="item1-1-1" src="<?php echo $avatar ?>" alt="">
                            <div class="item1-1-2">
                                <p class="item1-1-2-1"><?php echo $name_login ?></p>
                                <p class="item1-1-2-2 lang" style="font-size: 12px" data-it-root="1m" data-it="1 phút ·">1m · &nbsp;<i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" aria-label="Shared with Public group" role="img" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/woQDhi8VpyK.png&quot;); background-position: 0px -788px; background-size: 26px 928px; width: 12px; height: 12px; background-repeat: no-repeat; display: inline-block;"></i> &nbsp; · </p>
                            </div>
                        </div>
                        <!-- hide report  -->
                        <style>
                            .item1-2-2 * {
                                user-select: none !important;
                            }
                        </style>
                        <div class="item1-2">
                            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps gshiuhsdsc" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/K75psRNo_n5.png');background-position:0 -132px;background-size:190px 212px;width:20px;height:20px;background-repeat:no-repeat;display:inline-block;padding:11px"></i>
                            <div class="item1-2-2" style="display:none;user-select: none">
                                <div class="item1-2-2-1">
                                    <div class="item1-2-2-1-1"><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/Gs_HiEUMIYK.png&quot;); background-position: 0px -48px; background-size: 26px 268px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></div>
                                    <div class="item1-2-2-1-1 lang" title="Save to your collection" data-it-root="Save posts" data-it="Lưu bài viết">Save post</div>
                                </div>
                                <!-- content with text   -->
                                <div class="item1-2-2-2">
                                    <div class="item1-2-2-2-1"><img class="hu5pjgll lzf7d6o1" src="https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/jVvbRDT0Ugn.png" alt="" style="filter: invert(79%) sepia(11%) saturate(69%) hue-rotate(177deg) brightness(93%) contrast(84%);" height="20" width="20"></div>
                                    <div class="item1-2-2-2-2 lang" title="Remove post from your timeline" data-it-root="Hide post" data-it="Ẩn bài viết">Hide post</div>

                                </div>
                                <!-- image or video  -->
                                <div class="item1-2-2-3">
                                    <div class="item1-2-2-3-1"><img class="hu5pjgll lzf7d6o1" src="https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/c1yEIG3gvJo.png" alt="" style="filter: invert(79%) sepia(11%) saturate(69%) hue-rotate(177deg) brightness(93%) contrast(84%);" height="20" width="20"></div>
                                    <div class="item1-2-2-3-2 lang" data-it-root="Find support or report post" data-it="Tìm kiếm hỗ trợ hoặc báo cáo bài viết">Find support or report post</div>

                                </div>
                                <!-- show react and comment -->
                                <div class="item1-2-2-4">
                                    <div class="item1-2-2-4-1"></div>
                                    <div class="item1-2-2-4-2"></div>

                                </div>
                                <!-- perform like comm  ent or share  -->

                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="item2" style="display:flex;padding: 12px 16px 0 16px"></div>
                    <!--  -->
                    <div class="item3" style="display:flex;width:100%;padding: 12px 16px 0 16px">

                    </div>
                    <div class="item4" style="gap:5px;display:flex;width:100%;padding:12px;justify-content:space-between;align-items:center;border-left: 1px solid #2e89ff">
                        <div class="item4-1-spc" style="display: flex;flex-direction: row;align-items:center;gap: 10px">

                            <div class="item4-1">
                                <img class="j1lvzwm4" height="18" role="presentation" src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e" width="18">
                            </div>
                            <div style="color:#8f9195;font-family:sans-serif !important;font-size:15px" class="item4-2">
                                1
                            </div>
                        </div>
                        <div class="item4-2">
                            <div class="item4-2-1">
                                <p class="item4-2-1-1"></p>
                                <p class="item4-2-1-2"></p>
                            </div>
                            <div class="item4-2-2">
                                <p class="item4-2-2-1">

                                </p>
                                <p class="item4-2-2-2">

                                </p>
                            </div>
                        </div>
                    </div>
                    <style>
                .amn<?php echo $result[$i]['id'] ?> {
                    height: <?php
                                    if ($result[$i]['background'] !== 'none') {
                                        echo 300;
                                        echo 'px';
                                    } else {
                                        echo 0;
                                    }
                                    ?>;
                    background-image: <?php echo $result[$i]['background'] ?>;
                    background-position: center;
                    background-size: cover;
                    background-repeat: no-repeat;
                }
                
                .amn<?php echo $result[$i]['id'] ?> {
                    <?php 
                        if ($result[$i]['background'] !== 'none') {
                            echo 'text-align: center;';
                        }   
                        else {
                        echo 'text-align: left';
                        } 
                    ?>
                        
                }
            </style>
                    <style>
                        .item5 {
                            display: flex;
                            flex-direction: row;

                        }

                        .item5-spc {
                            padding: 14px 12px;
                            justify-content: space-between
                        }

                        .item5-spc>div {
                            width: 100%;
                            display: flex;
                            flex-direction: row;
                            border-top: 0.75px solid #37393a;
                            border-bottom: 0.75px solid #37393a;
                        }

                        .item5-spc>div>div {
                            width: calc(100% / 3);
                            justify-content: center;
                            align-self: center;
                            padding: 14px 0;
                            border-radius: 10px;
                            cursor: pointer;
                            transition: all 0.2s linear;
                        }

                        .item5-spc>div>div:hover {
                            background-color: #3a3b3c;
                        }

                        .qwe_sek_1 * {
                            fill: #2d88ff !important;
                        }
                    </style>





                    <script>
                        $(document).on("click", "._8epx_1 ._8epx_2", function() {
                            $(this).addClass("qwe_sek_1").siblings().removeClass("qwe_sek_1")
                        })
                    </script>





                    <div class="item5" style="padding: 12px">
                        <div class="item5-spc" style="width: 100%">
                            <div class="item5-spc-1">

                                <div class="item5-1" style="user-select: none">
                                    <div class="item5-1-1" style="position:relative;">
                                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps qwerty1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/woQDhi8VpyK.png&quot;); background-position: 0px -228px; background-size: 26px 928px; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;filter: invert(64%) sepia(6%) saturate(144%) hue-rotate( 176deg) brightness(89%) contrast(97%);display:block"></i>
                                        <i data-visualcompletion="css-img" class="hu5pjgll op6gxeva o6fdk32" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/woQDhi8VpyK.png&quot;); background-position: 0px -208px; background-size: 26px 928px; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;position:absolute;top:0;right:0;left:0;bottom:0;display:flex;align-items:center;justify-content:center;margin: 0 !important;filter: invert(8%) sepia(5%) saturate(505%) hue-rotate(169deg) brightness(97%) contrast(85%);display:none;position:absolute;top:-10px;left:-15px"></i>
                                    </div>
                                    <div style="color: #ffffff" class="item5-1-2 lang" data-it-root="Like" data-it="Thích">Like</div>
                                </div>
                                <div class="item5-2">
                                    <div class="item5-2-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/woQDhi8VpyK.png&quot;); background-position: 0px -188px; background-size: 26px 928px; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <div class="item5-2-2 lang" data-it-root="Comment" data-it="Bình luận">
                                        Comment
                                    </div>
                                </div>
                                <div class="item5-3">
                                    <div class="item5-3-1">
                                        <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/woQDhi8VpyK.png&quot;); background-position: 0px -248px; background-size: 26px 928px; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                    </div>
                                    <div class="item5-3-2 lang" data-it-root="Share" data-it="Chia sẻ">
                                        Share
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            

            <div class="wrap-ball">


                <div class="ballzzz ">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <script>
            $(".item5-1").on("click", function() {
                if ($(".qwerty1").css("display") == "none") {
                    $(".item5-1-2").css({
                        "color": "#ffffff"
                    })
                    $(".qwerty1").css({
                        "filter": "invert(64%) sepia(6%) saturate(144%) hue-rotate(176deg) brightness(89%) contrast(97%)",

                        "display": "initial"
                    })
                    $(".o6fdk32").css({
                        "filter": "initial",
                        "display": "none"
                    })

                } else {
                    $(".item5-1-2").css({
                        "color": "#2d86ff"
                    })
                    $(".qwerty1").css({
                        "filter": "invert(36%) sepia(78%) saturate(1328%) hue-rotate(198deg) brightness(107%) contrast(101%)",
                        "display": "none"
                    })
                    $(".o6fdk32").css({
                        "filter": "invert(45%) sepia(56%) saturate(3341%) hue-rotate(199deg) brightness(99%) contrast(104%)",
                        "display": "inline-block"
                    })
                }

            })
        </script>

        <script>
            $(".story1-self").on("click", function() {
                $.ajax({

                    url: 'storys/create/index.php',
                    method: 'POST',
                    data: {
                        name: '<?php echo $name_login ?>' ,
                        avatar: '<?php echo $avatar ?>'
                    },
                    success: function(result) {
                        history.replaceState({}, null, "/cockbook/story/create?id=<?php echo $id_login ?>&storytime")
                        $(".guihfggefdpjgihffjg").css({"display":"flex"})
                        $("title").html("Create Stories | Cockbook")
                        setTimeout(()=> {
                            $(".guihfggefdpjgihffjg").html(result)
                            
                            $("#main").css({"display":"none"})

                        },500)
                    }
                })
            })
        </script>




        <!--  -->
        <style>
            .item1-2 {
                user-select: none !important;

            }
        </style>
        <!--  -->
        <script>
            $(".gshiuhsdsc").on("click", function() {
                if ($(".item1-2-2").css("display") == "none") {
                    $(".item1-2-2").removeClass("ajpiewrj")
                    $(".item1-2-2").removeClass("vheouirhbn")
                    $(".item1-2-2").css("display", "flex")
                } else {
                    $(".item1-2-2").css("display", "none")
                }
            })
        </script>
        <script>
            $(".nxhoafnm").on("click", function() {
                $(".post-status").css({
                    "display": "block"
                })
                $(".blur-aovcl").css({
                    "display": "block"
                })
                console.log(1)
            })
        </script>

        <!--  -->
        <script>
            $("._8_sp_lg").on("scroll", function() {
                if ($(".wrapper-item").hasClass("end-status")) {
                    $(".wrap-ball").css({
                        "display": "none"
                    })
                }
            })
        </script>
        <!--  -->
        <script>
            $(".create-status-2-1").on("click", function() {

                if ($(".frame-message").css("display") == "none") {
                    $(".frame-message").css({
                        "display": "block"
                    })
                } else {
                    $(".frame-message").css({
                        "display": "none"
                    })
                }

            })
        </script>
        <!--  -->
    </div>

</div>