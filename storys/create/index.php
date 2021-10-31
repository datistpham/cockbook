<link rel="shortcut icon" href="http://localhost/cockbook/c-programe.png" type="image/x-icon">
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
if (!isset($_COOKIE['user'])) {
    header("Location: http://localhost/cockbook/");
}
require '../../connect.php';
$connp = connect();
$sqlp = "SELECT * FROM theme_story";
$sqlpp = "SELECT * FROM font_family";
$queryp = mysqli_query($connp, $sqlp);
$querypp = mysqli_query($connp, $sqlpp);
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
    .jdisogjejsdSfs i,
    .fjitujaeoitj i {
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
        padding-bottom: 15px;
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

            <style>
                .jkfbndsagnvrfgm {
                    position: fixed;
                    width: 360px;
                }
            </style>

            <div class="jkfbndsagnvrfgm">
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
            </div>
            <style>
                .werhnfembferdhmbgftrhfgnj {
                    width: 100%;
                    height: 122px;
                }
            </style>
            <div class="werhnfembferdhmbgftrhfgnj">

            </div>
            <style>
                .bfbdfjnbdkgjndsedfjn {
                    overflow-y: auto;
                    padding-right: 10px;
                }

                .bfbdfjnbdkgjndsedfjn::-webkit-scrollbar {
                    width: 10px;
                }

                .bfbdfjnbdkgjndsedfjn::-webkit-scrollbar-track {
                    background-color: rgba(111, 111, 111, 0.15);
                    transition: all 1s linear;
                }

                .bfbdfjnbdkgjndsedfjn::-webkit-scrollbar-thumb {
                    background-color: rgba(111, 111, 111, 0.7);
                    border-radius: 10px;
                    transform: scale(0.75);
                }

                .bfbdfjnbdkgjndsedfjn::-webkit-scrollbar-thumb:hover {
                    background-color: rgba(111, 111, 111, 1);
                }
            </style>
            <div class="bfbdfjnbdkgjndsedfjn">

                <div class="sifjjfsfopsfjepfjmz situaoijfmh" style="cursor:pointer">
                    <div class="jdsfhijfdgfs">
                        <img style="width:100%;height:100%" src="<?php echo $_POST['avatar'] ?>" alt="">

                    </div>

                    <div class="sgifbseiwehuihfwuie">
                        <p class="jgsuihwfdsgfgarf"><?php echo $_POST['name'] ?></p>
                    </div>
                </div>



                <style>
                    .jdofffbhdpiejfgj {
                        width: 100%;
                    }

                    .jdgjfgegdjifegijewrg {
                        position: relative;
                        width: calc(100% - 20px);
                    }

                    .fbjfjfqeijhuerjigd {
                        margin: 10px;
                        box-sizing: border-box;
                        resize: none;
                        border-radius: 8px;
                        padding: 26px 10px 8px 10px;
                        overflow: auto;

                    }

                    .fbjfjfqeijhuerjigd:focus {
                        outline: 2px solid #2e89ff;
                        border: 1px solid #fff;
                    }



                    .jsidhssdjadfdsdas {
                        position: absolute;
                        top: 8%;
                        left: 6%;
                        font-size: 12px !important;
                    }
                </style>


                <div class="jdofffbhdpiejfgj" style="display:none">
                    <div class="jdgjfgegdjifegijewrg">
                        <div class="jsidhssdjadfdsdas">
                            <span style="font-family: sans-serif !important;font-size: 12px;font-weight:500;color: #2e89ff;" class="jufhfidhjoidfhedjf">Text</span>
                        </div>
                        <textarea placeholder="Start typing" class="fbjfjfqeijhuerjigd" rows="7" style="background-color: #242526;width:100%"></textarea>
                    </div>
                </div>


                <!--  -->
                <style>
                    .fbnjgdijfgjrpodki {
                        padding: 10px;
                        border: 1px solid #3a3b3c;
                        border-radius: 8px;
                        height: 56px;
                        display: flex;
                        justify-content: space-between;
                        align-content: center;
                        align-items: center;
                        margin: 16px 10px 12px 10px;
                        position: relative;
                        cursor: pointer;
                        user-select: none;

                    }

                    .fbnjgdijfgjrpodki i {
                        filter: invert(92%) sepia(10%) saturate(74%) hue-rotate(181deg) brightness(102%) contrast(86%);
                    }

                    .gfjgfhjtuiethdj {
                        display: flex;
                        flex-direction: row;
                        justify-content: center;
                        align-content: center;
                        align-items: center;
                        gap: 10px
                    }

                    .fbjbjvaefjbdjsiwesfjdgdjeisf {
                        flex-direction: column;
                        display: flex;
                        position: absolute;
                        width: 100%;
                        background: #242526;
                        top: 100%;
                        left: 0;
                        border: 2px solid #3a3b3c;
                        border-radius: 8px;
                        padding: 8px;
                        display: none;
                        z-index: 1;
                        user-select: none;
                    }

                    .fbjbjvaefjbdjsiwesfjdgdjeisf>div {
                        width: 100%;
                    }

                    .dfbafdsfdggdees {
                        width: 100%;

                    }

                    .ndegnfdesnvgsrsdv {
                        padding: 6px;

                    }
                </style>


                <div class="fbnjgdijfgjrpodki" style="display:none">
                    <div class="gfjgfhjtuiethdj">
                        <div class="bjkfjbwogjijridgjfk"><i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/U0nt1n3ZL3O.png&quot;); background-position: 0px -244px; background-size: 26px 280px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i></div>
                        <div class="bfjfgderughuierdkjhewew"><span style="padding:6px" class="fgbhwjiofgwriojgferaoiegu">Clean</span></div>
                    </div>
                    <div class="fwegfgjdrgfjdne"><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/zvppbGMwrd_.png&quot;); background-position: -108px -172px; background-size: 190px 190px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i></div>


                    <div class="fbjbjvaefjbdjsiwesfjdgdjeisf">
                        <?php
                        while ($rowzxbn = mysqli_fetch_assoc($querypp)) {


                            ?>
                            <div class="dfbafdsfdggdees" id="plasdf<?php echo $rowzxbn['id'] ?>">
                                <p class="ndegnfdesnvgsrsdv"><?php echo $rowzxbn['name_font'] ?></p>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
                <style>
                    .fbjbjvaefjbdjsiwesfjdgdjeisf>div {
                        border-radius: 8px;
                        transition: all 0.2s linear;
                        cursor: pointer;
                    }

                    .fbjbjvaefjbdjsiwesfjdgdjeisf>div:hover {
                        background: #3a3b3c;

                    }
                </style>
                <script>
                    $(".fbnjgdijfgjrpodki").on("click", function() {
                        if ($(".fbjbjvaefjbdjsiwesfjdgdjeisf").css("display") === "none") {
                            $(".fbjbjvaefjbdjsiwesfjdgdjeisf").css({
                                "display": "flex"
                            })
                        } else {
                            $(".fbjbjvaefjbdjsiwesfjdgdjeisf").css({
                                "display": "none"
                            })
                        }
                    })
                </script>
                <!--  -->
                <script>
                    $(document).on("click", ".fbjbjvaefjbdjsiwesfjdgdjeisf > div", function(e) {
                        e.stopPropagation();
                        $(".fbjbjvaefjbdjsiwesfjdgdjeisf").css({
                            "display": "block"
                        })
                        $(".fgbhwjiofgwriojgferaoiegu").html($(this).html())
                        $.ajax({
                            url: "../handle_font.php",
                            method: 'GET',
                            data: {
                                detecx: $(this).attr("id")
                            },
                            success: function(result) {
                                $(".ufjdfjisdjodsasa").css({
                                    "font-family": "" + `${result}` + ""
                                })
                            }
                        })
                        $(".fbjbjvaefjbdjsiwesfjdgdjeisf").css({
                            "display": "none"
                        })
                    })
                </script>
                <!--  -->
                <style>
                    .fgdibjdirgjfh {
                        margin: 16px 10px 12px 10px;
                        display: flex;
                        flex-direction: column;
                        align-content: center;
                        gap: 15px;
                        border: 1px solid #3a3b3c;
                    }

                    .jhofgbhojidgifsjiovsfji {
                        display: flex;
                        flex-direction: row;
                        gap: 20px;
                        align-items: center;
                        flex-wrap: wrap;
                        padding: 0 10px;
                    }

                    .djfjeifdgbdjguhfgdejr {
                        padding-left: 10px;
                    }

                    .dergfhdqwnferethfsfsd {
                        gap: 17px;
                    }

                    .dergfhdqwnferethfsfsd>div {
                        cursor: pointer;
                    }
                </style>
                <div class="fgdibjdirgjfh" style="display:none">
                    <div class="djfjeifdgbdjguhfgdejr">
                        <span class="kfgbjgjegijf">Backgrounds</span>
                    </div>
                    <div class="jhofgbhojidgifsjiovsfji">
                        <?php
                        $resultq = array();
                        while ($rowp = mysqli_fetch_assoc($queryp)) {
                            array_push($resultq, $rowp);
                        }
                        $totalq = count($resultq);
                        ?>

                        <div class="dergfhdqwnferethfsfsd">


                            <?php
                            for ($ip = 0; $ip < 16; $ip++) {


                                ?>

                                <div id="_a_a_<?php echo $resultq[$ip]['id'] ?>_a_a" class="fbhdgijfjidguenggfhfterw dhsijfobeifdjgskfpbdseaafk" style="border-radius: 50%">

                                    <img src="<?php echo $resultq[$ip]['theme'] ?>" alt="" class="bfbhsgjgfgjwerwgwqe <?php echo 'dsa' . $resultq[$ip]['id'] ?>" style="width:22px;height:22px;border-radius:50%;box-sizing:content-box">
                                </div>

                            <?php
                            }
                            ?>

                            <?php
                            for ($ip = 16; $ip < $totalq; $ip++) {


                                ?>

                                <div id="_a_a_<?php echo $resultq[$ip]['id'] ?>_a_a" class="fbhdgijfjidguenggfhfterw dhsijfobeifdjgskfpbdseaafk nenvsfgdvsrgdhfrwdtrwgdweq3erdgwe " style="display:none;border-radius: 50%">

                                    <img src="<?php echo $resultq[$ip]['theme'] ?>" alt="" class="bfbhsgjgfgjwerwgwqe <?php echo 'dsa' . $resultq[$ip]['id'] ?>" style="width:22px;height:22px;border-radius:50%;box-sizing:content-box">
                                </div>

                            <?php
                            }
                            ?>
                        </div>
                        <style>
                            .bgngndegdgdweg {
                                display: flex;
                                justify-content: center;
                                align-content: center;
                                align-items: center;
                                width: 100%;
                                padding: 10px 0;
                                border-radius: 8px;
                                transition: all 0.2s linear;
                                position: relative;
                                z-index: 0;
                                cursor: pointer;
                            }

                            .bgngndegdgdweg i {
                                filter: invert(92%) sepia(10%) saturate(74%) hue-rotate(181deg) brightness(102%) contrast(86%);
                            }

                            .bgngndegdgdweg:hover {
                                background-color: #3a3b3c;
                            }

                            .gjgjfgedjhgrjfheqkjfhgerj {
                                width: 100%;
                                display: none;
                                display: flex;
                                flex-direction: row;
                                align-items: center;
                            }

                            .nkfjfjghfdekgjgwfggdfs {
                                width: 100%;
                                display: flex;
                                flex-direction: row;
                                align-items: center;
                                flex-wrap: wrap;
                                gap: 20px;
                                display: none;
                            }

                            .dergfhdqwnferethfsfsd {
                                display: flex;
                                flex-direction: row;
                                align-items: center;
                                flex-wrap: wrap;
                            }
                        </style>
                        <div class="bgngndegdgdweg">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/zvppbGMwrd_.png&quot;); background-position: -108px -172px; background-size: 190px 190px; width: 16px; height: 16px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>

                        <!--  -->
                        <script>
                            $(".bgngndegdgdweg").on("click", function() {
                                if ($(".nenvsfgdvsrgdhfrwdtrwgdweq3erdgwe").css("display") === "none") {
                                    $(".nenvsfgdvsrgdhfrwdtrwgdweq3erdgwe").css({
                                        "display": "flex"
                                    })

                                    $(".bgngndegdgdweg i").css({
                                        "transform": "rotate(180deg)"
                                    })
                                } else if ($(".nenvsfgdvsrgdhfrwdtrwgdweq3erdgwe").css("display") === "flex") {
                                    console.log(333)
                                    $(".nenvsfgdvsrgdhfrwdtrwgdweq3erdgwe").css({
                                        "display": "none"
                                    })
                                    $(".bgngndegdgdweg i").css({
                                        "transform": "rotate(0)"
                                    })
                                }

                            })
                        </script>
                        <!--  -->

                        <!--  -->
                    </div>
                </div>
            </div>
            <style>
                .nfrdgbnfrdhghfetgcmghferw4 {
                    width: 100%;
                    position: relative;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    z-index: 5;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
                    height: 57px;
                    padding: 0 12px;
                    box-sizing: border-box;
                    background: #242526;
                }

                .egnferdfgedgf {
                    width: 114px;
                    padding: 0 12px;
                    box-sizing: content-box;
                }

                .gvnesfdgdergd {
                    width: 171px;
                    padding: 0 12px;
                }

                .nfrdgbnfrdhghfetgcmghferw4 button {
                    border: none;
                    outline: none;
                    height: 36px;
                    border-radius: 6px;
                }

                .egnferdfgedgf {
                    background: rgba(255, 255, 255, 0.1);
                }

                .gvnesfdgdergd {
                    background: #3e5a7f;
                    cursor: not-allowed;
                    color: #868686;
                }
            </style>
            <div class="nfrdgbnfrdhghfetgcmghferw4" style="display:none">
                <div class="gdhrfhwrgfdffdfgd">
                    <button class="egnferdfgedgf">Discard</button>
                </div>
                <div class="bfhfrrghfdergfhdge">
                    <button disabled class="gvnesfdgdergd">Share to Story</button>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <style>
        .jifjpajtaera-2 {
            width: calc(100% - 360px);
            height: 100%;
            background: #18191a;
            position: relative;
        }

        .jfwddgvdfs,
        .vbjifopgfjgiojfdi {
            justify-content: flex-end;
            gap: 10px;
        }

        .fjitujaeoitj svg * {
            fill: #fff;
        }

        .vbjifopgfjgiojfdi>div {
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
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-direction: row;

        }

        .sfjimfhklgfikcx>div {
            width: 220px;
            height: 330px;
            border-radius: 8px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .cvjksgjfjgiokfm {
            width: 100%;
            height: 100%;
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
            cursor: pointer !important;
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
            margin: 8px 10px 0 0;
        }

        .guihfggefdpjgihffjg {
            background-color: #18191a;
        }

        @media screen and (max-width: 825px) {
            .djiofjdioiowejdm {
                display: none
            }
        }
    </style>
    <!--  -->
    <script>
        const fontSize = [{
                Clean: 'sans-serif'
            },
            {
                Simple: 'monospace'
            },
            {
                Fruktur: 'Fruktur'
            },
            {
                ZenKurenaido: 'Zen Kurenaido'
            }
        ]
    </script>
    <!--  -->
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




        <!--  -->
        <div class="djiofjdioiowejdm" style="display: flex">
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
                        <div class="jifkffgfdsfkngdfj">
                            <p class="jgiodtrkhfjjgf">Create a Photo Story</p>
                        </div>
                    </div>
                </div>


                <div class="jbdhskdnjerhskv">
                    <button class="cvjksgjfjgiokfm abdrergewqeraewread" style="border:none;outline:none"></button>
                    <div class="bjiojfjgisgjeir">
                        <i data-visualcompletion="css-img" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yD/r/VZEyXb4G4aX.png&quot;); background-position: 0px -332px; background-size: 222px 690px; width: 220px; height: 330px; background-repeat: no-repeat; display: inline-block;"></i>

                    </div>
                    <div class="jaiwujfsoirawjeidsmfvdfs">
                        <div class="jifgpfhgfdofkgnf">
                            <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/y4/r/CcUh0b7059j.png&quot;); background-position: -22px -622px; background-size: 50px 860px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </div>
                        <div class="jifkffgfdsfkngdfj">
                            <p class="jgiodtrkhfjjgf">Create a Text Story</p>
                        </div>
                    </div>
                </div>

            </div>

            <!--  -->


        </div>
        <style>
            .dgndrdgfrkopfsdfsrerwaefgd {
                margin-bottom: 20px;
                margin-top: 16px;
                margin-left: 8%;
                margin-right: 8%;
                width: calc(100% - 16%);
                box-sizing: border-box;
                padding-bottom: 40px;
                height: calc(100% - 82px);
                background: #242526;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: center;
                align-items: center;
                border-radius: 8px;
            }

            .egfdfdjhnfkjsfnfdd {
                width: 96%;
                height: 100%;
                background: #18191a;
                border-radius: 8px;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
            }

            .djisjfjdsdsfdsfdfdf {
                width: 80%;
                height: 88%;
                position: absolute;
                z-index: 999;
                top: 50px;
            }

            .preview_story {
                width: 96%;
                display: flex;
                justify-content: flex-start;
                align-content: center;
                align-items: center;
                padding-top: 10px;
                padding-bottom: 15px;
                
            }
            .jfiskfjsfgjnjkf {
                font-family: sans-serif !important;
                font-weight: 600 !important; 
                font-size: 14px !important
            }
            .jdsdhsuifhnfsafd {
                width: 302px;
                height: 542px;
                box-sizing: border-box;
                padding: 0 28px;
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-content: center;
                align-items: center;
                border-radius: 10px;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }

            .drfgdpjfisdsasadsd {
                width: 100%;
                height: 100%;
                resize: none;
                text-align: center;
                color: #000;
                display: flex;
                justify-content: center;
                white-space: normal;
                text-align: justify;
                -moz-text-align-last: center;
                /* Firefox 12+ */
                text-align-last: center;
                vertical-align: 50%;
                align-items: center;

            }

            .ufjdfjisdjodsasa {
                display: flex;
                width: 100%;
                text-align: center;
                justify-content: center;
                align-content: center;
                align-items: center;
                height: auto;
                white-space: pre-line
            }

            .juifdfuihfudifsff {
                word-break: break-all !important;
            }

            [contentEditable=true]:empty:not(:focus):before {
                content: attr(data-text);
                color: rgba(255, 255, 255, 0.5)
            }
            @media screen and (max-width:730px ) {
                .dgndrdgfrkopfsdfsrerwaefgd {
                    display: none !important;
                }
            }
            @media screen and (max-width: 820px ) {
                .djiofjdioiowejdm {
                    display: none !important;
                }
            } 
        </style>
        <!--  -->
            <script>
                $(".jbdhskdnjerhskv").on("click", function() {
                    $(".dgndrdgfrkopfsdfsrerwaefgd").css({"display":"flex"})
                    $(".nfrdgbnfrdhghfetgcmghferw4").css({"display":"flex"})
                    $(".fgdibjdirgjfh").css({"display":"flex"})
                    $(".fbnjgdijfgjrpodki").css({"display":"flex"})
                    $(".jdofffbhdpiejfgj").css({"display":"block"})

                    $(".djiofjdioiowejdm").css({"display":"none"})
                })
                $(".egnferdfgedgf").on("click", function() {
                    $(".dgndrdgfrkopfsdfsrerwaefgd").css({"display":"none"})
                    $(".nfrdgbnfrdhghfetgcmghferw4").css({"display":"none"})
                    $(".fgdibjdirgjfh").css({"display":"none"})
                    $(".fbnjgdijfgjrpodki").css({"display":"none"})
                    $(".jdofffbhdpiejfgj").css({"display":"none"})
                    $(".djiofjdioiowejdm").css({"display":"flex"})
                })
            </script>
        <!--  -->
        <div class="dgndrdgfrkopfsdfsrerwaefgd" style="display:none">
            <div class="preview_story"><span class="jfiskfjsfgjnjkf">Preview</span></div>
            <div class="egfdfdjhnfkjsfnfdd">
                <div class="jdsdhsuifhnfsafd" style="background-image: url(https://scontent.fhph1-3.fna.fbcdn.net/v/t39.10873-6/64573208_318989072361867_7052361760598130688_n.jpg?_nc_cat=1&ccb=1-5&_nc_sid=a86453&_nc_ohc=aVzkK1tlw3gAX98MUAI&_nc_ht=scontent.fhph1-3.fna&oh=689a39cd2e11dbfb8dd5b7621167bf07&oe=61839538);">
                    <div class="drfgdpjfisdsasadsd">
                        <div class="ufjdfjisdjodsasa">
                            <p contentEditable=true data-text="START TYPING" class="juifdfuihfudifsff" style="text-align: centerl"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="djisjfjdsdsfdsfdfdf"></div>
        </div>
    </div>
</div>
<script>
    $(".fsfojgsoegwaf").on("click", function() {
        $(".guihfggefdpjgihffjg").css({
            "display": "none"
        })
        $(".create_story").css({
            "display": "none"
        })
        $("#main").css({
            "display": "block"
        })
        history.replaceState({}, null, "/cockbook/cockbook.php")
        $("title").html("Cockbook")
    })
</script>
<script>
    $(".fbjfjfqeijhuerjigd").on("keyup keypress", function() {
        if ($(this).val() === "") {
            $(".juifdfuihfudifsff").html("Start Typing")
        }
        $(".juifdfuihfudifsff").html($(this).val())
    })
</script>
<script>
    $(document).on("click", ".dergfhdqwnferethfsfsd div", function() {
        $(this).css({
            "outline": "3px solid #2e89ff",
            "transform": "scale(1.2)"
        }).siblings().css({
            "outline": "none",
            "transform": "scale(1)"
        })
        $.ajax({
            url: "../handle_theme_story.php",
            method: "GET",
            data: {
                recogId: $(this).attr('id')
            },
            success: function(result) {
                $(".jdsdhsuifhnfsafd").css({
                    "background-image": "url(" + `${result}` + ")"
                })
            }
        })
    })
</script>
<script>
    $(".fbjfjfqeijhuerjigd").on("keyup keypress", function() {

        if($(this).val()!=="") {
            $(".gvnesfdgdergd").removeAttr("disabled").css({"cursor":"pointer","background-color":"#2e89ff","color":"#fff"})
        }
        else if($(this).val()==="") {
            $(".gvnesfdgdergd").attr("disabled",true).css({"cursor":"not-allowed","background-color:":"#3e5a7f","color":"#868686"})
        }
    })
    $(".gvnesfdgdergd").on("click", function() {
        window.location.href= 'https://www.google.com/'
    })
</script>