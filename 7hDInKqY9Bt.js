let is_busy = false
let page = 1
let stopped = false
$(document).ready(function() {
    $("._8_sp_lg").scroll(function() {
        $element = $('#content')
        if ($("._8_sp_lg").scrollTop() + $("._8_sp_lg").height() >= ($element.height())) {
            if (is_busy == true) {
                return false
            }
            if (stopped == true) {
                return false
            }
            is_busy = true
            page++
            $.ajax({
                    method: 'POST',
                    dataType: 'text',
                    url: 'handle.php',
                    data: { page: page },
                    success: function(result) {
                        $element.append(result)
                        $(".item").css({"backgroundColor":"#242526"})
                    }
                })
                .always(function() {
                    is_busy = false
                })
            return false
        }
    })
})
