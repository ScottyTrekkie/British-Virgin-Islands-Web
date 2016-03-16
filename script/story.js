
$(document).ready(function(){
 /*   $(".fancybox-media").click(function(event){event.preventDefault();}) */
 
  $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
            media : {}
        }    
    }).trigger('click');

});