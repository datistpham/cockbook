
<style>
    :root {
        --color1: #e4e6eb;
        --color2: #b0b3b8;
        --color3: #2e89ff;
    }

    .friend_requests * {
        font-family: sans-serif !important;
    }

    .friend_requests {
        width: 100%;
        height: 100%;
    }

    .friend_requests-1 {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
        margin: 10px 0 15px 10px;
        transition: all 0.15s linear;
    }

    .friend_requests-1-1 {
        display: flex;
        align-items: center;
        filter: invert(69%) sepia(1%) saturate(745%) hue-rotate(175deg) brightness(95%) contrast(105%);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        cursor: pointer
    }

    .friend_requests-1-1:hover {
        background-color: #5F5E5E91 !important;
    }

    .friend_requests-1-2 {
        display: flex;
        flex-direction: column;
    }

    .friend_requests-1-2-1 {
        font-size: 12px;
        color: #b0b3b8;
        cursor: pointer;
    }

    .friend_requests-1-2-1:hover {
        text-decoration: underline;
    }

    .friend_requests-1-2-2 {
        font-size: 24px !important;
        color: var(--color1);
        text-shadow: 0 0 0 10px var(--color1);
    }

    /*  */
    .friend_requests-2 {
        display: flex;
        padding-left: 10px;
        flex-direction: column;
        gap: 10px
    }

    .friend_requests-2-1 {
        color: var(--color1);
        font-weight: bolder;
    }

    .friend_requests-2-2 {
        font-weight: lighter;
        font-size: 12px;
        color: var(--color3);
    }

    .friend_requests-3 {
        padding-top: 5px;
        display: flex;
        padding-left: 10px;
    }

    .friend_requests-3-1 {
        padding-top: 10px;
        font-weight: lighter;
        font-size: 12px;
        color: var(--color2);
    }
</style>
<div class="friend_requests">
    <div class="friend_requests-1">
        <div class="friend_requests-1-1">
            <i data-visualcompletion="css-img" class="hu5pjgll m6k467ps" style="background-image: url(&quot;https://www.facebook.com/rsrc.php/v3/yg/r/K75psRNo_n5.png&quot;); background-position: 0px -88px; background-size: 190px 212px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
        </div>
        <div class="friend_requests-1-2">
            <div class="friend_requests-1-2-1">
                Friend
            </div>
            <div class="friend_requests-1-2-2">
                Friend Request
            </div>
        </div>
    </div>
    <div class="friend_requests-2">
        <div class="friend_requests-2-1">
            Friends Requests
        </div>
        <div class="friend_requests-2-2">
            View Sent Requests
        </div>
    </div>
    <div class="friend_requests-3">
        <div class="friend_requests-3-1">
            No new friends requests
        </div>
    </div>
</div>
<script>
        $(".friend_requests-1-1").on("click", function() {
            $.ajax({
                url:'friends/index.php',
                method: 'post',
                success: function(data) {
                   $(".friends-1-spc").html('') 
                   $(".friends-1-spc").html(data) 
                   $(".friends-1-spc .friends-2-spc").css('display','none')  
                    
                },
                error: function(jqXHR, textStatus, errorThrown) {
                   $(".friends-1-spc").html("jfohfdoiesfhjnioedfheu9rh") 

                }
            })
        })
    
</script>