<!DOCTYPE HTML>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Safari Master Report Card</title>

    <!-- Bootstrap core CSS --> 
    <link href="style/frameworks/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
    
    <!-- other CSS -->
    <link rel="stylesheet" href="style/reportcard.css"/>
    <link rel="stylesheet" href="style/textstyles.css"/>
  
    <!-- koekjes -->
    <script src="script/jquery-1.11.3.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/cookies.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="script/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="startcookies();" style="margin-top: 0cm;">
        
    
    <img class="picture-background" src="content/images/placeholder_blurred.jpg">
    
      
    <div id="reporttitle" style="margin-top:50px">
        <div id="titlelogo">
            <img id="titlelogo" src="content/images/logo_transparent.png">
        </div>
        <h class="text-type1">
            Safari Master Report Card
        </h>
    </div>
      
    
    <div class="allcontainer">
        <div class="chaptercontainer" >
            <a href="?p=quiz&chapter=1" class="clickable"></a>
            <img class="picture-chapter" src="content/images/foundation/foundation.jpg" >
            <img class="picture-checkmark" id="c1" src="content/images/checkmark.png">
            <div  class="progressbar">
                <div id="p1"></div>
            </div>
            <div class="text-type2" id="chaptertitle">
                chapter 1: Our Story
            </div>
        </div>
        <div class="chaptercontainer">
            <a href="?p=quiz&chapter=2" class="clickable"></a>
            <img class="picture-chapter" src="content/images/botswana/nxai.jpg">
            <img class="picture-checkmark" id="c2" src="content/images/checkmark.png">
            <div class="progressbar">
                <div id="p2"></div>
            </div>
            <div class="text-type2" id="chaptertitle">
                chapter 2: Destination Botswana
            </div>
        </div>
        <div class="chaptercontainer">
            <a href="?p=quiz&chapter=3" class="clickable"></a>
            <img class="picture-chapter" src="content/images/portfolio/kanga/3.jpg">
            <img class="picture-checkmark" id="c3" src="content/images/checkmark.png">
            <div class="progressbar">
                <div id="p3"></div>
            </div>
            <div class="text-type2" id="chaptertitle">
                chapter 3: Destination Zimbabwe
            </div>
        </div>
        <div class="chaptercontainer">
            <a href="?p=quiz&chapter=4" class="clickable"></a>
            <img class="picture-chapter" src="content/images/logistics/logistics.jpg">
            <img class="picture-checkmark" id="c4" src="content/images/checkmark.png">
            <div class="progressbar">
                <div id="p4"></div>
            </div>
            <div class="text-type2" id="chaptertitle">
                chapter 4: Safari Logistics
            </div>
        </div>
        <div class="chaptercontainer">
            <a href="?p=quiz&chapter=5" class="clickable"></a>
            <img class="picture-chapter" src="content/images/foundation/what.jpg">
            <img class="picture-checkmark" id="c5" src="content/images/checkmark.png">
            <div class="progressbar">
                <div id="p5"></div>
            </div>
            <div class="text-type2" id="chaptertitle">
                chapter 5: African Bush Camps Foundation
            </div>
        </div>
        <div class="chaptercontainer">
            <a href="?p=quiz&chapter=6" class="clickable"></a>
            <img class="picture-chapter" src="content/images/portfolio/khwai/5.jpg">
            <img class="picture-checkmark" id="c6" src="content/images/checkmark.png">
            <div class="progressbar">
                <div id="p6"></div>
            </div>
            <div class="text-type2" id="chaptertitle">
                chapter 6: Our Portfolio
            </div>
        </div>
       
    </div>
      
      
      <div class="text-type4" id="arrowguidebox">
          <img class="picture-arrow" src="content/images/arrowleft.png">
          Tap a chapter to enter
          <img class="picture-arrow" src="content/images/arrow.png">
      </div>
      <div class="text-type3" id="totalprogressbox">  
        Total Progress:
        <div class="progressbar">
            <div id="totalprog"></div>
        </div>
      </div>
      
      <hr>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="script/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="script/ie10-viewport-bug-workaround.js"></script>
    
    <!--cookies-->
   
  </body>
</html>
