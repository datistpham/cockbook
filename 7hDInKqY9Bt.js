let is_busy = false
let page = 1
let stopped = false
$(document).ready(function() {
    $("._8_sp_lg").scroll(function() {
        $element = $('.wrapper-item')
        if ($("._8_sp_lg").scrollTop() + $("._8_sp_lg").height() >= 0.85*($element.height())) {
            if (is_busy == true) {
                return false
            }
            if (stopped == true) {
                return false
            }
            is_busy = true
            $.ajax({
                    method: 'POST',
                    dataType: 'text',
                    url: 'handle.php',
                    data: { page: page },
                    success: function(result) {
                        $element.append(result)
                    }
                })
                .always(function() {
                    is_busy = false
                })
            page++

            return false
        }
    })
})
