<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <link rel="stylesheet" href="style/safarikit.css" />
    </head>

    <body style="background: url(content/images/lion.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;" >

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class ="mainBody" >
		<div class="centeredbox">
			<?php 
			// Only offer the Master Certificate to logged-in partners
			if (isset($_COOKIE['loggedIn']))
				if ($_COOKIE['loggedIn']=="true") { 
			?>
			<div class="box">
				
				<div style="margin-top:auto; margin-bottom: auto;">
                                    <a href="?p=report-card" style="display: inline;">
                                        <img class="safariicon" src="content/images/menu/Logo.png">
                                        </img>
                                    </a>
                                </div>
                                <div class="titletext">
					<h1>Get your 'Safari Master' Certificate</h1>
				</div>
			</div>
			<?php } ?>

			<div class="box">
				<div style="margin-top:auto; margin-bottom: auto;">
					<a href="?p=videos" style="display: inline;">
                                             <img class="safariicon" src="content/images/menu/Videos.png">
                                             </img>
                                        </a>
				</div>
                                <div class="titletext">
					<h1>Videos</h1>
				</div>
			</div>
			
			<div class="box">
				
				<div style="margin-top:auto; margin-bottom: auto;">
                                    <a href="?p=brochure" style="display: inline;">
                                        <img class="safariicon" src="content/images/menu/Brochure.png">
                                        </img>
                                    </a>
                                </div>
                                <div class="titletext">
					<h1>Camp iBrochures</h1>
				</div>
			</div>
			
			<div class="box">
				
				<div style="margin-top:auto; margin-bottom: auto;">
                                    <a href="?p=map-zimbabwe" style="display: inline;">
                                        <img class="safariicon" src="content/images/menu/Map.png">
                                        </img>
                                    </a>
                                </div>
                                <div class="titletext">
					<h1>Zimbabwe Safari Map</h1>
				</div>
			</div>
			
			<div class="box">
				
				<div style="margin-top:auto; margin-bottom: auto;">
                                    <a href="?p=map-botswana" style="display: inline;">
                                        <img class="safariicon" src="content/images/menu/Map.png">
                                        </img>
                                    </a>
				</div>
                                <div class="titletext">
					<h1>Botswana Safari Map</h1>
				</div>
			</div>
                </div>
        </div>


        <!-- koekjes -->
        <script src="script/cookies.js"></script>
        <script src="script/jquery.cookie.js"></script>
        
       

        <!--cookies-->

    </body>
</html>
