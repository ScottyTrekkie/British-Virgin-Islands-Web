<!DOCTYPE HTML>

<?php
//This file contains all non-standard-page home page content, so e.g. navbar is 
//excluded
?>

<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <link rel="stylesheet" href="style/FAQ.css" />
        <link rel="stylesheet" href="style/home.css" />
        
    </head>

    <body style="margin-top: -50px;">
        <div class="jumbotron">
            <div style="z-index: -1; margin-top: 0px;">
                <video poster="content/images/intro_poster.png" loop autoplay muted style="width: 100%; height: 100%; ">
                    <source src="content/videos/intro.mp4" type="video/mp4">
                </video>

                <!-- darken the video by overlaying an overlay with partial transparency -->
                <div class="video-overlay" style="width: 100%; height: inherit; background-color: rgba(0,0,0,0.25);top:  0;left: 0;position:  absolute;"></div>
            </div>
        </div>
        
        <div class="logo">
            <img class="logopic unselectable" src="content/images/logo_transparent.png">
        </div>
        
        
        <div class="menu">
            <div class="item">
                <a href="?p=discovery" class="clickable">
                <img class="menupic unselectable" src="content/images/menu/Dest_Disc.png">
                </a>
            </div>
            <div class="item" style="margin-left: 54px;">
                <a onclick="urlOverlay()" class="clickable">
                <img class="menupic unselectable" src="content/images/menu/Check_Book.png">
                </a>
            </div>
            <div class="item" style="margin-left: 84px;">
                <a href="?p=safariStarterKit" class="clickable">
                <img class="menupic unselectable" src="content/images/menu/Start_Kit.png">
                </a>
            </div>
        </div>
            
        </div>
        <!--<div href="?p=FAQ" id="round-button">
            <div class="round-button-circle">
                <a href="?p=FAQ" class="round-button">
                    <h2 style="text-align: center; color: white; margin-top: 30px">FAQ</h2>
                </a>
            </div>
        </div> -->
        
        <script type="text/javascript"> function urlOverlay() {
                $.fancybox({
                    'width': '75%',
                    'height': '75%',
                    'autoScale': true,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    href: "http://www.africanbushcamps.com/enquire-now/",
                    'type': 'iframe'
                });
            }</script>
    </body>
</html>
