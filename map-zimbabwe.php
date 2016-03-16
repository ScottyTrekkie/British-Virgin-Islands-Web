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
      
    <!--jquery for progress bar-->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <script>
        var myCenter=new google.maps.LatLng(-17.405284, 29.676720);
        var somalisa=new google.maps.LatLng(-19.044973, 27.048775);
        var kanga=new google.maps.LatLng(-15.908723, 29.263118);
        var zambezi=new google.maps.LatLng(-15.937092, 29.457037);
        function initialize() {
            var mapProp = {
                center:myCenter,
                zoom:7,
                mapTypeId:google.maps.MapTypeId.HYBRID
            };
            var map=new google.maps.Map(document.getElementById("map"),mapProp);
            var marker1=new google.maps.Marker({
                position:somalisa,
                title:"Somalisa Camp"
            });
            marker1.setMap(map);
            
            var marker2=new google.maps.Marker({
                position:kanga,
                title:"Kanga Camp"
            });
            marker2.setMap(map);
            
            var marker3=new google.maps.Marker({
                position:zambezi,
                title:"Zambezi Life Styles"
            });
            marker3.setMap(map);
        }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
    
    <div id="map"></div>
     <style> 
        footer {display: none}
    </style>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
   
   
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
