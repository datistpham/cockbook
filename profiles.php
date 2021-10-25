<?php
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
}
require 'connect.php';
$conne = connect();

$detect_account = "SELECT * from user_information where id=".$_GET["id"]."";
//
//
$query_de = mysqli_query($conne, $detect_account);
while ($rowzz = mysqli_fetch_assoc($query_de)) {
        $aaav= $rowzz['story'];
        $name_single_login = $rowzz['surname'];
        $name_login = $rowzz['surname'] . " " . $rowzz['firstname'];
        break;
    
}
?>
<style>

</style>
<div class="propro">

    <div class="profile-header">
        <div class="profile-header-sub">
            <img class="cover-photo" src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.6435-9/243375262_606891540325993_3726923662378113979_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=e3f864&_nc_ohc=7VUw4otU9IEAX-jLrIO&_nc_ht=scontent.fhph1-2.fna&oh=7010d8a84083a17fcf5478d62cc7e844&oe=619A164D" alt="">
            <div class="avatar">
                <img src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-1/c0.0.320.320a/p320x320/115766767_344381379910345_2906344814977556019_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=7206a8&_nc_ohc=MvfZyA4L2DMAX-cq8KA&_nc_ht=scontent-hkt1-1.xx&oh=c4259166dc5b79815c0cd088c5f9544d&oe=61986F07" width="168px" height="168px" alt="">
            </div>
            <div class="profile-name">
                <div class="name-info"><?php echo $name_login ?></div>
                <div class="add-story">
                    <div class="add-story1">
                        <button class="add-story11"><img class="hu5pjgll eb18blue" src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/gmRaVnWydOi.png" alt="" height="16" width="16"><span>Add to story</span> </button>
                        <button class="edit-profile"><img class="hu5pjgll lzf7d6o1" src="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/tmaz0VO75BB.png" alt="" height="16" width="16"><span> Edit profile</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-main">
        <div class="header-2">
            <div class="header-2-1">
                <li class="header-2-1-content">Posts</li>
                <li class="header-2-1-content qazx">About</li>
                <li class="header-2-1-content wwwq" >friends</li>
                <li class="header-2-1-content wwwq" >photos</li>
                <li class="header-2-1-content wwwq" >story archive</li>
                <li class="header-2-1-content wwwq" >videos</li>
                <li class="header-2-1-content addp " style="position:relative"><span>more</span><svg viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv gl3lb2sf hhz5lgdu">
                        <path d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z"></path>

                    </svg>
                    <div class="more_option" style="display:none;position: absolute;z-index: 10;top:100%;width: 342px;background-color: #242526;box-shadow: 0px 0px 25px 2px black;border-radius: 8px;left:0">
                        <div class="option_sub poiw20 qpoi">About</div>
                        
                      
                        <div class="option_sub poiw14 qwevc">Friends</div>
                        <div class="option_sub poiw15 qwevc">Photos</div>
                        <div class="option_sub poiw16 qwevc">Story Archive</div>
                        <div class="option_sub poiw17 qwevc">Videos</div>
                        <div class="option_sub poiw1">Check-Ins</div>
                        <div class="option_sub poiw2">Sports</div>
                        <div class="option_sub poiw3">Musics</div>
                        <div class="option_sub poiw4">Movies</div>
                        <div class="option_sub poiw5">TV shows</div>
                        <div class="option_sub poiw6">Books</div>
                        <div class="option_sub poiw7">Apps and Games</div>
                        <div class="option_sub poiw8">Likes</div>
                        <div class="option_sub poiw9">Events</div>
                        <div class="option_sub poiw10">Questions</div>
                        <div class="option_sub poiw11">Review Given</div>
                        <div class="option_sub poiw12">Groups</div>
                        <div class="option_sub poiw13">Managers Sections


                        </div>
                </li>

            </div>
            <style>
                .more_option>div {
                    padding: 12px 8px !important;
                    margin: 0 8px;
                    border-radius: 8px;
                    transition: all 0.2s linear;
                }

                .more_option>div:hover {
                    background-color: #3a3b3c;

                }

                .more_option {
                    margin-top: 5px;
                    height: 442px;
                    overflow-y: scroll;
                    user-select: none;
                }
                .more_option li {
                    -webkit-user-select: none !important;
                    user-select: none !important; 
                }
                .addp span {
                    user-select: none !important;
                }

                .more_option::-webkit-scrollbar {
                    width: 10px;
                    border-bottom-right-radius: 7px;
                    border-top-right-radius: 7px;

                }

                .more_option::-webkit-scrollbar-track {
                    background-color: rgba(111, 111, 111, 0.15);
                }

                .more_option::-webkit-scrollbar-thumb {
                    background-color: rgba(111, 111, 111, 1);
                    border-radius: 10px;
                    transform: scale(0.75);
                }
                .qwevc {
                    display: none;
                }
                .qpoi {
                    display: none;
                }
                
            </style>
            <div class="header-2-2">
                <div class="header-2-2-content">
                    <svg viewBox="0 0 24 24" width="1em" height="1em" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry gl3lb2sf hhz5lgdu">
                        <circle cx="12" cy="12" r="2.5"></circle>
                        <circle cx="19.5" cy="12" r="2.5"></circle>
                        <circle cx="4.5" cy="12" r="2.5"></circle>
                    </svg>

                </div>
            </div>
        </div>
        <script>
            $(".addp").on("click", ()=> {
                if($(".more_option").css("display")=="none") {
                    $(".more_option").css({"display":"block"})
                }
                else {
                    $(".more_option").css({"display":"none"})
                }
                
            })

        </script>
        <div class="section-content">
            <div class="recommend-friends">
                <div class="people-you-may">
                    <div class="fjksfadad">People you may know</div>
                    <div class="ffjofrjwar">
                        <svg viewBox="0 0 24 24" width="1em" height="1em" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry gl3lb2sf hhz5lgdu">
                            <circle cx="12" cy="12" r="2.5"></circle>
                            <circle cx="19.5" cy="12" r="2.5"></circle>
                            <circle cx="4.5" cy="12" r="2.5"></circle>
                        </svg>
                    </div>
                </div>
                <!--  -->
                <div class="photo-recommend">
                    <div class="detail-photo">
                        <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.6435-1/p480x480/245964925_300729231892070_4544601051538009173_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=y0HpJpV-hSgAX8QnhQf&_nc_ht=scontent.fhph1-2.fna&oh=c4b2b67fb33ac5ef60b37bd769a752bb&oe=6197FB35" alt="">
                        <div class="name-recommend">Hồng Nhung Nguyễn</div>
                        <div class="button-add-friends">
                            <button class="add-friends"><i data-visualcompletion="css-img" class="hu5pjgll op6gxeva" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yj/r/GisDp6YW1lj.png&quot;); background-position: 0px -902px; background-size: 34px 974px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i><span class="text-add-friends">add friends</span></button>
                        </div>
                    </div>
                    <div class="detail-photo">
                        <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.6435-1/p480x480/245964925_300729231892070_4544601051538009173_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=y0HpJpV-hSgAX8QnhQf&_nc_ht=scontent.fhph1-2.fna&oh=c4b2b67fb33ac5ef60b37bd769a752bb&oe=6197FB35" alt="">
                        <div class="name-recommend">Hồng Nhung Nguyễn</div>
                        <div class="button-add-friends">
                            <button class="add-friends"><i data-visualcompletion="css-img" class="hu5pjgll op6gxeva" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yj/r/GisDp6YW1lj.png&quot;); background-position: 0px -902px; background-size: 34px 974px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i><span class="text-add-friends">add friends</span></button>
                        </div>
                    </div>
                    <div class="detail-photo">
                        <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.6435-1/p480x480/245964925_300729231892070_4544601051538009173_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=y0HpJpV-hSgAX8QnhQf&_nc_ht=scontent.fhph1-2.fna&oh=c4b2b67fb33ac5ef60b37bd769a752bb&oe=6197FB35" alt="">
                        <div class="name-recommend">Hồng Nhung Nguyễn</div>
                        <div class="button-add-friends">
                            <button class="add-friends"><i data-visualcompletion="css-img" class="hu5pjgll op6gxeva" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yj/r/GisDp6YW1lj.png&quot;); background-position: 0px -902px; background-size: 34px 974px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i><span class="text-add-friends">add friends</span></button>
                        </div>
                    </div>
                    <div class="detail-photo">
                        <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.6435-1/p480x480/245964925_300729231892070_4544601051538009173_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=y0HpJpV-hSgAX8QnhQf&_nc_ht=scontent.fhph1-2.fna&oh=c4b2b67fb33ac5ef60b37bd769a752bb&oe=6197FB35" alt="">
                        <div class="name-recommend">Hồng Nhung Nguyễn</div>
                        <div class="button-add-friends">
                            <button class="add-friends"><i data-visualcompletion="css-img" class="hu5pjgll op6gxeva" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yj/r/GisDp6YW1lj.png&quot;); background-position: 0px -902px; background-size: 34px 974px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i><span class="text-add-friends">add friends</span></button>
                        </div>
                    </div>
                    <div class="detail-photo">
                        <img src="https://scontent.fhph1-2.fna.fbcdn.net/v/t1.6435-1/p480x480/245964925_300729231892070_4544601051538009173_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=y0HpJpV-hSgAX8QnhQf&_nc_ht=scontent.fhph1-2.fna&oh=c4b2b67fb33ac5ef60b37bd769a752bb&oe=6197FB35" alt="">
                        <div class="name-recommend">Hồng Nhung Nguyễn</div>
                        <div class="button-add-friends">
                            <button class="add-friends"><i data-visualcompletion="css-img" class="hu5pjgll op6gxeva" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yj/r/GisDp6YW1lj.png&quot;); background-position: 0px -902px; background-size: 34px 974px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i><span class="text-add-friends">add friends</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="super-content">
                <div class="biology">
                    <div class="intro-bio">Intro</div>
                    <div class="edit-bio">
                        <p class="content-story"><?php echo $aaav ?></p>
                        <button class="tap-to-edit-bio">Edit bio</button>
                    </div>
                    <div class="edit-direct" style="display:none">
                        <textarea maxlength="100" minlength="0" style="resize: none;overflow-y: hidden;" cols="40" rows="5" class="dfhfsd" placeholder="Write here to people know who you are"></textarea>
                        <div class='shsoidjs'>

                            <span class="eurehfdsa" style="margin-right:5px">100 </span> <span> characters remaining</span>
                        </div>
                        <div class="liketomake">
                            <div class="afhsddass">
                                <div class="hdhsiodda">
                                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yy/r/FFJlY6jO_92.png&quot;); background-position: 0px -22px; background-size: 22px 198px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                                </div>
                                <div class="hudihifdiudfifa">
                                    Public
                                </div>
                            </div>


                            <div class="jsiosiodsdio">
                                <button class="hudfhsiudh">
                                    Cancel
                                </button>
                                <button style="cursor:not-allowed;color:#bcc0c4" class="hduihaoidja" disabled>
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <style>
                    #load-profile-vippro {
                        width: 100%;
                        display: flex;
                        flex-direction: column;
                        gap: 10px;
                        background-color: #18191a;
                    }

                    .hidden {
                        display: none;
                    }

                    .balls {
                        width: 100%;
                        display: flex;
                        height: 60px;
                        flex-flow: row nowrap;
                        align-items: center;
                        justify-content: center;
                        background-color: #18191a;
                    }

                    .balls div {
                        width: 0.8em;
                        height: 0.8em;
                        border-radius: 50%;
                        background-color: #3cefff;
                        transform: translateY(-100%);
                        animation: wave 0.8s ease-in-out alternate infinite;
                    }

                    .balls div:nth-of-type(1) {
                        animation-delay: -0.4s;
                    }

                    .balls div:nth-of-type(2) {
                        animation-delay: -0.2s;
                    }

                    @keyframes wave {
                        from {
                            transform: translateY(-100%);
                        }

                        to {
                            transform: translateY(100%);
                        }
                    }

                    .item2z {
                        width: 100%;
                        height: 400px;
                        background: #242526;
                    }
                    .asdfgh {
                        display: none;
                    } 
                    .propro .section-main .section-content .recommend-friends .photo-recommend .detail-photo {
                        padding: 10px !important;
                    }
                </style>
                <!--  -->
                <!--  -->
                <div class="self-timeline">
                    <div id="load-profile-vippro">
                        <?php require('loadprofile.php'); ?>
                    </div>
                    <div class="balls hidden">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(".dfhfsd").on('keyup keypress', function() {
        $(".eurehfdsa").html(parseInt(100 - $(this).val().length))
        if($(this).val().length===0) {
            $(".hduihaoidja").attr("disabled").css({"cursor":"not-allowed","color":"#bcc0c4"});
            
        } 
        else {
            $(".hduihaoidja").removeAttr("disabled").css({"cursor":"pointer","color":"#ffffff"});
        }
        
        
    })
    $(".hduihaoidja").on("click",function() {
        $(".edit-direct").css({"display":"none"})
        $(".edit-bio").css({"display":"block"})
        
    })
    $(".tap-to-edit-bio").on('click', function() {
        $(".edit-bio").css({
            "display": "none"
        })
        $(".edit-direct").css({
            "display": "block"
        })

    })
    $(".hudfhsiudh").on('click', () => {
        $(".edit-direct").css({
            "display": "none"
        })
        $(".edit-bio").css({
            "display": "block"
        })
    })
</script>

<style>
    @media screen and (max-width: 974px) {
        .propro .profile-header .profile-header-sub .cover-photo {
            transform: scale(1);
        }

        .header-2-1 li {
            padding: 10px !important;
        }

        .propro .profile-header .profile-header-sub .avatar {
            bottom: 85px !important;
            left: 63% !important;
        }

        .propro .profile-header .profile-header-sub .profile-name {
            left: 0 !important;
            width: 100% !important;
        }

    }

    @media screen and (max-width: 625px) {
        .propro .profile-header .profile-header-sub .profile-name {
            transform: scale(0.85) !important;
        }

        .propro .profile-header .profile-header-sub .avatar img {
            width: 100% !important;
            height: 100% !important;
        }

        .propro .profile-header .profile-header-sub .avatar {
            width: 120px !important;
            height: 120px !important;
        }

        .propro .profile-header .profile-header-sub .profile-name .name-info {
            font-size: 24px !important;
        }
    }

    @media screen and (max-width: 1268px) {
        .propro .section-main .section-content {
            width: 100% !important;
        }

        .propro .section-main .header-2 {
            width: 100% !important;
            height: auto !important;
        }

        .propro .section-main {
            padding: 0 16px !important;
        }

    }

    @media screen and (max-width: 1000px) {
        .propro .profile-header .profile-header-sub .cover-photo {
            transform: scale(1);
            height: auto;
            width: 100% !important;
        }
    }

    @media screen and (max-width: 700px) {
        .propro .profile-header .profile-header-sub {
            width: 100% !important;
        }

    }

    @media screen and (max-width: 390px) {
        .propro .profile-header .profile-header-sub {}

        .add-story1 button {
            padding: 0 !important;
        }

        .edit-profile {
            padding: 0 !important;
        }


    }

    @media screen and (min-width: 956px) and (max-width: 1000000px) {
        .avatar {
            left: 10% !important;
        }
    }

    @media screen and (max-width: 450px) {
        .propro .profile-header .profile-header-sub .profile-name .name-info {

            left: -5px !important;
        }
    }

    @media screen and (max-width: 400px) {
        .profile-name {
            flex-direction: column !important;
        }
    }

    @media screen and (min-width: 610px) and (max-width: 711px) {
        .propro .profile-header .profile-header-sub .profile-name .name-info {
            left: 0% !important;
        }
    }

    @media screen and (max-width: 400px) {
        .propro .profile-header .profile-header-sub .profile-name {
            left: -10px !important;
        }

        .profile-name {
            gap: 8px !important;
        }

        .add-story1 button {
            padding: 3px 5px !important;
        }
    }

    @media screen and (min-width:325px) and (max-width: 340px) {
        .propro .profile-header .profile-header-sub .profile-name {
            top: 145px !important;
        }
    }

    @media screen and (max-width: 365px) {
        .propro .profile-header .profile-header-sub .profile-name {
            top: 263px !important;
        }

    }
    @media screen and (max-width: 320px) {
         .qazx {
             display: none;
         }
         .qpoi {
             display: block;
         }
    }
    @media screen and (max-width: 670px) {
        .wwwq {
            display: none;
        }
        .qwevc {
            display: block !important;
        }
    }
    @media screen and (min-width:505px) and (max-width:853px) {
        .more_option {
            width: 270px !important;
            left: unset !important;
        }
    }
    @media screen and (max-width: 505px) {
        .more_option {
            width: 270px !important;
            left: unset !important;
        }
    }
    @media screen and (max-width: 905px) {
        .super-content {
            flex-direction: column !important;
        }
        .biology {
            width: 100% !important;
            position: static !important;
        }
        .self-timeline {
            width: 100% !important;
        }
    }
</style>
<script>
    $(".hduihaoidja").on("click", function() {
        $.ajax({
            url:"story.php",
            method: "get",
            data: {
                story: $(".dfhfsd").val()
            },
            success: function(result) {
                $(".content-story").html(result)
            }
        
        })
    })
</script>