// Biến dùng kiểm tra nếu đang gửi ajax thì ko thực hiện gửi thêm
var is_busy_profile = false;
     
// Biến lưu trữ trang hiện tại
var page_profile = 1;
 
// Biến lưu trữ rạng thái phân trang 
var stopped_profile = false;
 
$(document).ready(function()
{    
    // Khi kéo scroll thì xử lý
    $(window).scroll(function() 
    {
        // Element append nội dung
        $element = $('#load-profile-vippro');
         
        // ELement hiển thị chữ loadding
        $loadding = $('#loadding-async');
         
        // Nếu màn hình đang ở dưới cuối thẻ thì thực hiện ajax
        if($(window).scrollTop() + $(window).height() >= $element.height()) 
        {
            // Nếu đang gửi ajax thì ngưng
            if (is_busy_profile == true){
                return false;
            }
             
            // Nếu hết dữ liệu thì ngưng
            if (stopped_profile == true){
                return false;
            }
             
            // Thiết lập đang gửi ajax
            is_busy_profile = true;
             
            // Tăng số trang lên 1
            page_profile++;
             
            // Hiển thị loadding
            $loadding.removeClass('hidden');
             
            // Gửi Ajax
            $.ajax(
            {
                type        : 'get',
                dataType    : 'text',
                url         : 'loadprofile.php',
                data        : {page_profile : page_profile},
                success     : function (result)
                {
                    $element.append(result);
                }
            })
            .always(function()
            {
                // Sau khi thực hiện xong ajax thì ẩn hidden và cho trạng thái gửi ajax = false
                $loadding.addClass('hidden');
                is_busy_profile = false;
            });
            return false;   
        }
    });
});