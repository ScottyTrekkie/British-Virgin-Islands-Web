
$(document).ready(function(){
 /*   $(".fancybox-media").click(function(event){event.preventDefault();}) */
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        type: 'iframe',
        iframe : {
        preload: false
        }
    });

    $(".various").fancybox({
        maxWidth    : 800,
        maxHeight    : 600,
        fitToView    : false,
        width        : '70%',
        height        : '70%',
        autoSize    : false,
        closeClick    : false,
        openEffect    : 'none',
        closeEffect    : 'none'
    });

    $('.fancybox-media').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        helpers : {
        media : {}
        }
    });
});