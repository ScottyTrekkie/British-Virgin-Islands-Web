<?php
/**
 * page template which dynamically loads page content. If no specific page 
 * content is requested, the normal index page is loaded.
 */
include("include/functions.php");
?>
<!DOCTYPE html>
<html lang="en" ng-app="abc">
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.ico">
        <title>TravMob</title>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

        <!-- Bootstrap core CSS --> 
        <link href="style/frameworks/bootstrap/bootstrap.css" rel="stylesheet"> 

        <!-- sidebar stuff -->
        <link rel = "stylesheet" href = "style/sidebar.css"/>
        <script src = "script/sidebar.js"></script>

        <!-- fancybox stuff -->
        <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-media.js"></script>
        
        <!-- Font-awesome icons and glyphs -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
        <link rel="stylesheet" href="style/mystyle.css"/>
        <link rel="stylesheet" href="style/login.css">

        <script src="script/bootstrap.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- Angular JS -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-animate.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular-cookies.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.14.3/ui-bootstrap-tpls.js"></script>

        <!-- Login script -->
        <script src="script/login.js"></script> 

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body><nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?p=home">African Bush Camps</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="?chapterID=20">Our story</a></li>
                        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destination <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="?chapterID=24">Botswana</a></li>
                                <li><a href="?chapterID=35">Zimbabwe</a></li>
                            </ul>
                        </li>
                        <li><a href="?chapterID=21">Safari logistics</a></li>
                        <li><a href="?chapterID=60">African Bush Camps foundation</a></li>
                        <li><a href="?p=portfolio">Our portfolio</a></li>
                    </ul>
					<form class="navbar-form">
						<div ng-controller="LoginCtrl" ng-init="popup()" ng-cloak>
							<button type="submit" ng-click="handleLogin()" class="btn btn-success">{{buttonText}}</button>
						</div>
					</form>

                </div>
            </div>
        </nav>
        <?php
//        // get requested page type (destination, quiz, etc.)
//        $pageFile = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_URL) . '.php';
//
//        if (file_exists($pageFile)) {
//            include($pageFile);
//        } else {
//            include('home.php');
//        }
        
        // get requested chapter or page (destination, quiz, etc.)
        $chapterID = filter_input(INPUT_GET, 'chapterID', FILTER_SANITIZE_URL);
        $pageFile = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_URL) . '.php';
        
        if ($chapterID !== NULL) {
            include('chapter.php');
        } elseif (file_exists($pageFile)) {
            include($pageFile);
        } else {
            include('home.php');
        }
        ?>

        <!-- footer -->
        <div class="container">
            <hr>
            <footer>
                <table>
                    <tr>
                        <td class="footer-text" style="width: 60%">
                            &copy; African Bush Camps and African Safaris. All Rights Reserved. 2015.
                        </td>
                        <td style="width: 40%">
                            <div style="right: 0px; margin-top: 0px;">
                                <a role="button" target="_blank" href="https://www.google.nl/maps/place/Botswana/@-21.5469794,25.2452777,6z/data=!4m2!3m1!1s0x1ea44321d1452211:0xf1647c2a8715af7b"><img class="socialIcon" src="content/images/icons/MapsIcon.png" id="maps" alt="Maps"></a>
                                <a role="button" target="_blank" href="https://www.facebook.com/africanbushcamps"><img class="socialIcon" src="content/images/icons/Facebook.png" id="facebook" alt="Facebook"></a>
                                <a role="button" target="_blank" href="https://twitter.com/AfricanBushTwit"><img class="socialIcon" src="content/images/icons/Twitter.png" id="twitter" alt="Twitter"></a>
                                <a role="button" target="_blank" href="https://www.youtube.com/channel/UCWJTR_566mevyIG30OveSBQ/playlists"><img class="socialIcon" src="content/images/icons/Youtube.png" id="youtube" alt="YouTube"></a>
                                <a role="button" target="_blank" href="https://www.linkedin.com/company/african-bush-camps"><img class="socialIcon" src="content/images/icons/LinkedIn.png" id="linkedin" alt="LinkedIn"></a>
                                <a role="button" target="_blank" href="https://plus.google.com/u/0/101732496626408850746"><img class="socialIcon" src="content/images/icons/GooglePlus.png" id="plus" alt="GooglePlus"></a>
                                <a role="button" target="_blank" href="https://www.instagram.com/africanbushcamps/"><img class="socialIcon" src="content/images/icons/Instagram.png" id="instagram" alt="Instagram"></a>
                                <!-- Wat moet deze knop doen? -->
                                <a role="button" target="_blank" href="http://www.africanbushcamps.com/feed"><img class="socialIcon" src="content/images/icons/RSS.png" id="rss" alt="RSS"></a>
                                <!-- Bij FAQ is misscien mooi om het in een pop up venster binnen de site te laten zien. De rest lijkt me beter om linkjes naar een andere pagina te houden -->
                                <a role="button" href="?p=faq"><img class="socialIcon" src="content/images/icons/FAQ.png" id="faq" alt="FAQ"></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </footer>

        </div>


        <!-- Bootstrap core JavaScript
     ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->

        <script type="text/javascript" src="script/smoothscroll.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="script/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>

