
var is_busy_profile = false;
     

var page_profile = 1;
 

var stopped_profile = false;
 
$(document).ready(function()
{    
    
    $(window).scroll(function() 
    {
        
        $element = $('#load-profile-vippro');
         
        
        $loadding = $('#loadding-async');
         
        
        if($(window).scrollTop() + $(window).height() >= 0.85*$element.height()) 
        {
            
            if (is_busy_profile == true){
                return false;
            }
             
            
            if (stopped_profile == true){
                return false;
            }
             
            
            is_busy_profile = true;
             
            
            page_profile++;
             
            
            $loadding.removeClass('hidden');
             
            
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
                
                $loadding.addClass('hidden');
                is_busy_profile = false;
            });
            return false;   
        }
    });
});