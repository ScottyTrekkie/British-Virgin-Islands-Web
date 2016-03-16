/**
 * Opens the specified href in a facybox
 * @param {string} href The specified href
 * @returns {undefined}
 */
function sidebar_open(href) {
    $.fancybox({
        'width': '75%',
        'height': '75%',
        'autoScale': true,
        'transitionIn': 'none',
        'transitionOut': 'none',
        href: href,
        'type': 'iframe'
    });
}

function sidebar_slideshow(id) {
    slideshows = [];
    slideshows[2] = "som1";
    slideshows[3] = "soma1";
    slideshows[4] = "kang1";
    slideshows[5] = "Zam1";
    slideshows[6] = "Lin1";
    slideshows[7] = "Ebo1";
    slideshows[8] = "Khwai1";
    slideshows[9] = "oka1";
    slideshows[10] = "mus1";
    slideshows[11] = "hwan1";
   
    //create usable image source array from parameter
//    imageArray = [];
//    for (var i = 0; i < arguments.length; i++) {
//        imageArray.push(
//                {href: arguments[i], title: i});
//    }

    slideshow = "content/images/slideshows/" + slideshows[id];
    imageArray = [];
    i = 1;
    while (imageExists(slideshow + "." + i + ".jpg")) {
        imageArray.push(
                {href: slideshow + "." + i + ".jpg", title: i});
        i++;
    }

    $.fancybox.open(imageArray, {
        padding: 0
    });
}

function imageExists(url) {
    exists = false;
    
    $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        async: false,
        success: function(data) {
            exists = true;
        } 
     });
    
    return exists;
}