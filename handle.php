<?php
// include('a.php');
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    sleep(1);
}
$conn = mysqli_connect('localhost', 'root', '', 'cockbook');
mysqli_set_charset($conn, 'utf8');
$page = isset($_POST['page']) ? (int) $_POST['page'] : 1;
if ($page <= 1) {
    $page = 1;
}
$limit = 3;
$start = ($limit * $page) - $limit;
$sql = "SELECT * from post_cockbook limit $start," . ($limit + 1);
$query = mysqli_query($conn, $sql);

$result = array();
while ($row = mysqli_fetch_array($query)) {

    array_push($result, $row);
}

$total = count($result);
if ($total > $limit) {
    for ($i = 0; $i < $total - 1; $i++) {
        ?>



        <div class="item __<?php echo $result[$i]['id'] ?>__">
            <div class="item1" style="margin-bottom:10px">
                <div class="item1-1">
                    <img class="item1-1-1" style="object-fit:cover" src="<?php echo $result[$i]['avatar'] ?>" alt="">
                    <div class="item1-1-2">
                        <p class="item1-1-2-1"><?php echo $result[$i]['name_post'] ?></p>
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
            <style>
                .item2 {
                    width: 100%;
                    object-fit: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                }

                .item2-1 {
                    display: flex;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <!--  -->
            <div class="item2" style="display:flex;padding: 12px 16px 0 16px">
                <div class="item2-1 amn<?php echo $result[$i]['id'] ?>">
                    <p class="item2-1-1"><?php echo $result[$i]['content'] ?></p>
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
                            } else {
                                echo 'text-align: left';
                            }
                            ?>
                }
            </style>
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



    <?php
        }
    } else {





        for ($i = 0; $i < $total; $i++) {


            ?>
        <div class="item">
            <div class="item1" style="margin-bottom:10px">
                <div class="item1-1">
                    <img class="item1-1-1" style="object-fit:cover" src="<?php echo $result[$i]['avatar'] ?>" alt="">
                    <div class="item1-1-2">
                        <p class="item1-1-2-1"><?php echo $result[$i]['name_post'] ?></p>
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
            <style>
                .item2 {
                    width: 100%;
                    object-fit: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                }

                .item2-1 {
                    display: flex;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                }

                .item2-1 p {
                    text-align: center;
                }
            </style>
            <!--  -->
            <div class="item2" style="display:flex;padding: 12px 16px 0 16px">
                <div class="item2-1 amn<?php echo $result[$i]['id'] ?>">
                    <p class="item2-1-1"><?php echo $result[$i]['content'] ?></p>
                </div>
            </div>
            <style>
                .amn<?php echo $result[$i]['id'] ?> {
                    height: <?php
                                    if ($result[$i]['background'] !== '') {
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
            </style>
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





<?php
    }
}
if ($total <= $limit) {
    echo '
        <style>
            .wrap-ball {
                display: none !important;
            }
        </style>
        <script language="javascript">stopped = true</script>';
    echo '<div class="end-status" style="text-align:center;padding:10px 0 20px 0">Da het tin vui long load lai </div>
        <div class="jddhfjsdfdjdkfkd" style="width:100%;display:flex;justify-content:center;align-items:center">
            <button class="ddfnddkdsm" style="border:none;outline:none;border-radius: 8px;background-color: #2d88ff;color:#fff;font-weight:600;font-size:20px;padding:8px 16px">Load again</button>
        </div>';

    echo '<script async>
                $(".ddfnddkdsm").on("click", function() {
                    setTimeout(()=>{
                    window.location.href= "http://localhost/cockbook/cockbook.php"
                },1000)
                })   
                
        
        </script>     
            ';
}

?>