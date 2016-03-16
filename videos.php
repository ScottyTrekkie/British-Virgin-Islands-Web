<!DOCTYPE HTML>
<?php
$chapter = simplexml_load_file("http://travpro.yourworldapps.nl/API/app/create-web.php?chapterID=20");
?>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Videos</title>
        
        <link rel="stylesheet" href="style/videos.css" />
        <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-media.js"></script>
        
        
        <script src="script/videos.js"></script>
    
    </head>

    <body>
        
        <div class="menu-offset">
        <div class="content">
            <div class="column">  <!-- linksboven -->
                <h1 class="column-header">Video Library</h1>
                
                <div class="tile"> <!-- links midden -->
                    <a target="_blank" href="https://www.youtube.com/channel/UCWJTR_566mevyIG30OveSBQ"><img src="content/images/icons/youtube-icon.png" width="80" height="80"  alt="" /></a>
                    <p>African Bush Camps<br>YouTube  Channel</p>
                </div>
            </div>
  
            <div class="column">
                <div class="tile"> <!--rechtsboven -->
                    <figure>
                        <a class="videos fancybox-media" href="https://www.youtube.com/watch?v=ry5Q2Wai0u0">
                        <img class="videoThumb" src="content/images/preview-video1.png" width="350" height="210"></a>
                    </figure>
                    <p>This is African Bush Camps</p>
                </div>
                <div class="tile"> <!-- rechtsonder -->
                    <figure>
                        <a class="videos fancybox-media" href="https://www.youtube.com/watch?v=aQFL3vXzNDw">
                        <img class="videoThumb" src="content/images/preview-video2.png" width="350" height="210"></a>
                    </figure>
                    <p>Welcome to African Bush Camps</p>
                </div>
            </div>
    </div>

    </body>

</html>