<link rel="shortcut icon" href="http://localhost/cockbook/c-programe.png" type="image/x-icon">
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
}
?>
<style>
    
    * {
        margin: 0;
        padding: 0;
        font-size: 16px;
        box-sizing: border-box;
    }

    .create_story {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row;

    }

    .jijijairjapr-1 {
        display: flex;
        justify-content: center;
        align-items: center;

        width: 360px;
        height: 100%;
    }

    .hsuihaifjdsd-1 {
        display: flex;
        flex-direction: column;
        /* width: 100%; */
        height: 100%;
        background-color: #242526;
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        width: 360px;
    }

    .arwodsdsdff {
        display: flex;
        width: 100%;
        height: 56px;
        align-content: center;
        align-items: center;
        justify-content: flex-start;
        gap: 10px;
        border-bottom: 1px solid #2f3031;
    }

    .fsfojgsoegwaf,
    .fjitujaeoitj {
        width: 40px;
        height: 40px;
        cursor: pointer;
    }

    .dwuaiyhawrnefae {
        margin-left: 16px;
        border-radius: 50%;
        background: #18191a;
    }

    .dwuaiyhawrnefae i,
    .jdisogjejsdSfs i,.fjitujaeoitj i {
        filter: invert(100%) sepia(6%) saturate(25%) hue-rotate(234deg) brightness(109%) contrast(105%);
    }

    .dghsetiernfzc {
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
        cursor: pointer;
    }

    .dghsetiernfzc img {
        width: 100%;
        height: 100%;
    }

    .situaoijfmh {
        display: flex;
        flex-direction: row;
        align-items: center;

    }

    .sudhawoijiesdf,
    .jgsuihwfdsgfgarf {
        font-family: sans-serif !important;

    }

    .jgsuihwfdsgfgarf {
        color: #e4e6eb;
        font-weight: 600;
    }
    .jdsfhijfdgfs img {
        border-radius: 50%;
        object-fit: cover;
    }
    .sudhawoijiesdf h1 {
        font-size: 24px;
        color: #e4e6eb;
    }

    .difjpjfgfsdgfohds {
        height: 56px;

        margin: 0 16px;
        margin-top: 10px;
        justify-content: space-between;
    }

    .jdisogjejsdSfs {
        width: 36px;
        height: 36px;
        background-color: #3a3b3c;
        border-radius: 50%;

    }

    .sifjjfsfopsfjepfjmz {
        margin-top: 8px;
        height: max-content;
        justify-content: flex-start;
        gap: 10px;
        padding-bottom: 30px;
        border-bottom: 1px solid #2f3031;
        margin-left: 16px;
    }

    .jdsfhijfdgfs {
        width: 60px;
        height: 60px;

    }
</style>
<div class="create_story">
    <div class="jijijairjapr-1">
        <!--  -->

        <div class="hsuihaifjdsd-1">
            <div class="arwodsdsdff">
                <div class="fsfojgsoegwaf dghsetiernfzc dwuaiyhawrnefae">
                    <i data-visualcompletion="css-img" class="hu5pjgll eb18blue" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/I2I8fiyTBO8.png&quot;); background-position: -132px -110px; background-size: 190px 190px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                </div>
                <div class="fjitujaeoitj dghsetiernfzc">
                    <img src="http://localhost/cockbook/c-programe.png" alt="">
                </div>
            </div>
            <div class="difjpjfgfsdgfohds situaoijfmh">
                <div class="jijwpfjddzd sudhawoijiesdf">
                    <h1 class='dhsfjefjpodjpf'>Your Story</h1>
                </div>
                <div class="jdisogjejsdSfs dghsetiernfzc">
                    <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/xTmha7VizIB.png&quot;); background-position: 0px -770px; background-size: 22px 998px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                </div>
            </div>

            <div class="sifjjfsfopsfjepfjmz situaoijfmh">
                <div class="jdsfhijfdgfs">
                    <img style="width:100%;height:100%" src="<?php echo $_POST['avatar'] ?>" alt="">

                </div>
                <div class="sgifbseiwehuihfwuie">
                    <p class="jgsuihwfdsgfgarf"><?php echo $_POST['name'] ?></p>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <style>
        .jifjpajtaera-2 {
            width: calc(100% - 360px);
            height: 100%;
            background: #18191a;
            position: relative;
        }
        .jfwddgvdfs,.vbjifopgfjgiojfdi {
            justify-content: flex-end;
            gap: 10px;
        }
        .fjitujaeoitj svg * {
            fill: #fff;
        }
        .vbjifopgfjgiojfdi > div {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3a3b3c;
            border-radius: 50%;
            
        }
        .djiofjdioiowejdm {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-direction: row;

        }
        .sfjimfhklgfikcx>div {
            width: 220px ;
            height: 330px;
            border-radius: 8px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .cvjksgjfjgiokfm {
            width: 100%;height: 100%;
            position: absolute;
            opacity: 0;
        }
        .bjiojfjgisgjeir {
            width: 100%;
            height: 100%;
            
        }
        .jifgpfhgfdofkgnf {
            width: 44px;
            height: 44px;

        }
        .jifgpfhgfdofkgnf i {
            filter: invert(98%) sepia(1%) saturate(1150%) hue-rotate(192deg) brightness(92%) contrast(100%);
        }
        .jaiwujfsoirawjeidsmfvdfs {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .sfjimfhklgfikcx {
            display: flex;
            gap: 20px;
            flex-direction: row;
        }
        .jbdhskdnjerhskv * {
            cursor: pointer !important  ;
        }
        .cvjksgjfjgiokfm {
        cursor: pointer !important;
        }
        .jaiwujfsoirawjeidsmfvdfs {
            position: absolute;
            gap: 10px;
        }
        .jifgpfhgfdofkgnf {
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            border-radius: 50%;
            background: #18191a;
            gap: 10px
        }
        .jgiodtrkhfjjgf {
            font-family: sans-serif !important;
            font-weight: 600;
            color: #fff;
        }
        .vbjifopgfjgiojfdi {
            position: relative;
            z-index: 9;
            margin: 8px 10px 0 0 ;
        }
        .guihfggefdpjgihffjg {
        background-color: #18191a;
    }
    </style>
    <div class="jifjpajtaera-2">
        <div class="vbjifopgfjgiojfdi situaoijfmh">
            <div class="jfwddgvdfs fjitujaeoitj">
                <svg viewBox="0 0 44 44" width="1em" height="1em" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry jnigpg78 odw8uiq3">
                    <circle cx="7" cy="7" r="6"></circle>
                    <circle cx="22" cy="7" r="6"></circle>
                    <circle cx="37" cy="7" r="6"></circle>
                    <circle cx="7" cy="22" r="6"></circle>
                    <circle cx="22" cy="22" r="6"></circle>
                    <circle cx="37" cy="22" r="6"></circle>
                    <circle cx="7" cy="37" r="6"></circle>
                    <circle cx="22" cy="37" r="6"></circle>
                    <circle cx="37" cy="37" r="6"></circle>
                </svg>
            </div>
            <div class="jfwddgvdfs fjitujaeoitj">
                <svg viewBox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20">
                    <path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z"></path>
                </svg>
            </div>
            <div class="jfwddgvdfs fjitujaeoitj">
                <svg viewBox="0 0 20 20" width="1em" height="1em" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry jnigpg78 odw8uiq3">
                    <path d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z"></path>
                </svg>
            </div>
        </div>
        <div class="djiofjdioiowejdm">
            <div class="sfjimfhklgfikcx">
                <div class="jbdhskdnjerhskv">
                    <input type="file" class="cvjksgjfjgiokfm">
                    <div class="bjiojfjgisgjeir">
                        <i data-visualcompletion="css-img" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yD/r/VZEyXb4G4aX.png&quot;); background-position: 0px 0px; background-size: 222px 690px; width: 220px; height: 330px; background-repeat: no-repeat; display: inline-block;"></i>
                        
                    </div>
                    <div class="jaiwujfsoirawjeidsmfvdfs">
                        <div class="jifgpfhgfdofkgnf">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/CcUh0b7059j.png&quot;); background-position: 0px -578px; background-size: 50px 860px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="jifkffgfdsfkngdfj"><p class="jgiodtrkhfjjgf">Create a Photo Story</p></div>
                    </div>
                </div>


                <div class="jbdhskdnjerhskv">
                    <button class="cvjksgjfjgiokfm" style="border:none;outline:none"></button> 
                    <div class="bjiojfjgisgjeir">
                    <i data-visualcompletion="css-img" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yD/r/VZEyXb4G4aX.png&quot;); background-position: 0px -332px; background-size: 222px 690px; width: 220px; height: 330px; background-repeat: no-repeat; display: inline-block;"></i>
                        
                    </div>
                    <div class="jaiwujfsoirawjeidsmfvdfs">
                        <div class="jifgpfhgfdofkgnf">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/CcUh0b7059j.png&quot;); background-position: -22px -622px; background-size: 50px 860px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="jifkffgfdsfkngdfj"><p class="jgiodtrkhfjjgf">Create a Text Story</p></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(".fsfojgsoegwaf").on("click", function() {
        $(".guihfggefdpjgihffjg").css({"display":"none"})
        $(".create_story").css({"display":"none"})
        $("#main").css({"display":"block"})
        history.replaceState({}, null, "/cockbook/cockbook.php")
        $("title").html("Cockbook")
    })
    $(".cvjksgjfjgiokfm").on("click", function() {
        $.ajax({
            url: "../stories_react/public/index.html",
            method: "POST",
            success: function(result) {
                $(".create_story").html(result)
            }       
        })
    })
</script>