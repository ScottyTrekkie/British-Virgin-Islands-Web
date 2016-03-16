<!DOCTYPE html>

<?php
//This file contains all non-standard-page home page content, so e.g. navbar is 
//excluded
?>

<html lang="en">
    <head>
        <script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <link href="style/map-style.css" rel="stylesheet">
        <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" >
        <title>Brochure</title>
        <!--jquery for progress bar-->
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="style/brochure.css" />
        <script src="script/brochure.js"></script>
        
        <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="plugins/fancybox/source/helpers/jquery.fancybox-media.js"></script>

    </head>
    <body>
        <div class="menu-offset ">

            <iframe src="http://wetu.com/Rack/View/Catalogue/2830" width="100%" height="100%"></iframe>
          
            <!--
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a data-toggle="tab" href="#zimbabwe">Zimbabwe</a></li>
                <li><a data-toggle="tab" href="#botswana">Botswana</a></li>
            </ul>
            
            <div class="tab-content">
                <div id="zimbabwe" class="tab-pane fade in active">

                    <!-- de juiste plaatjes staan er nog niet in, dit zijn dezelfde plaatjes als in portfolio (kon ze niet vinden)  
                    <div class="ImageGrid centered">

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="khwai" src="content/images/portfolio/khwai.jpg">
                            <h2 class="ImageGrid-title">Khwai Tented Camp</h2>
                        </div>
                        
                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="linyanti" src="content/images/portfolio/linyanti.jpg">
                            <h2 class="ImageGrid-title">Linyanti Bush Camp</h2>
                        </div>

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="ebony" src="content/images/portfolio/ebony.jpg">
                            <h2 class="ImageGrid-title">Linyanti Ebony Tented Camp</h2>
                        </div>

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="saile" src="content/images/portfolio/saile.jpg">
                            <h2 class="ImageGrid-title">Saile Tented Camp</h2>
                        </div>
                    </div>
                </div>



                <div id="botswana" class="tab-pane fade">

                    <div class="ImageGrid centered">

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="kanga" src="content/images/portfolio/kanga.jpg">
                            <h2 class="ImageGrid-title">Kanga Camp</h2>
                        </div>

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="zambezi" src="content/images/portfolio/zambezi.jpg">
                            <h2 class="ImageGrid-title">Zambezi Life Styles Camp</h2>
                        </div>

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="somalisa" src="content/images/portfolio/somalisa.jpg">
                            <h2 class="ImageGrid-title">Somalisa Camp</h2>
                        </div>

                        <div class="ImageGrid-tile">
                            <img class="ImageGrid-thumb broch-button" role="button" id="acacia" src="content/images/portfolio/acacia.jpg">
                            <h2 class="ImageGrid-title">Somalisa Acacia Camp</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->




        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>
