<!DOCTYPE html>
<?php
$chapter = simplexml_load_file("http://travpro.yourworldapps.nl/API/app/create-web.php?chapterID=23");
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Portfolio</title>


        <link rel="stylesheet" href="style/sidebar.css" />
        <link rel="stylesheet" href="style/portfolio.css" />

        <script src="script/sidebar.js"></script>
        <script src="script/portfolio.js"></script>

        <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    </head>

    <body>
        <div class="container menu-offset">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#botswana" aria-controls="botswana" role="tab" data-toggle="tab">Botswana</a></li>
                <li role="presentation"><a href="#zimbabwe" aria-controls="zimbabwe" role="tab" data-toggle="tab">Zimbabwe</a></li>
            </ul>

            <!-- Tab panes . Het Smooth scrollen werkt nog niet, omdat ik niet precies weet waarheen ik moet verwijzen!-->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="botswana">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach ($chapter->page as $page): //for each page in this chapter   ?> 
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php echo $page->page_number; ?>">
                                    <h1 class="panel-title">
                                        <a class="collapsed portfolio-collapsed-button portfolio-button tab" id="head<?php echo $page->page_number; ?>" style="background-image: url(<?php echo $page->image; ?>)" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $page->page_number; ?>" aria-expanded="true" aria-controls="collapse<?php echo $page->page_number; ?>" 
                                           onclick="if (document.getElementById('head<?php echo $page->page_number; ?>').getAttribute('aria-expanded') == 'false') {
                                                       location.href = '#text<?php echo $page->page_number; ?>';
                                                   } else {
                                                       location.href = '#head<?php echo $page->page_number; ?>';
                                                   }
                                                   document.getElementById('head<?php echo $page->page_number; ?>').className += 'smoothScroll';"
                                                                                                      aria-expanded="false" aria-controls="collapse<?php echo $page->page_number; ?>">
                                            <h1 class="portfolio-button-text"><?php echo $page->title; ?></h1>
                                        </a>
                                    </h1>
                                </div>
                                <div id="collapse<?php echo $page->page_number; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $page->page_number; ?>">
                                    <div class="panel-body">
                                        <article>
                                            <div class="row">
                                                <div class="col-xs-11">
                                                    <p>
                                                        <?php echo load_page_content($page); ?>
                                                    </p>
                                                </div>
                                                <div class="col-xs-1">
                                                    <?php
                                                    // include_sidebar($page->link_1, $page->link_2, $page->link_3, $page->link_4, $page->link_5);
                                                    include_sidebar($page);
                                                    ?>
                                                </div>


                                            </div>
                                        </article>

                                    </div>
                                </div>
                            </div>

                            <?php if ($page->page_number == 6) : //end of botswana portfolio, so for zimbabwe portfolio insert new tab ?>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane" id="zimbabwe">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <?php
                            endif;
                        endforeach; 
                        ?>


                        <!-- een originele
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headinFive">
                                <h4 class="panel-title">
                                    <a class="collapsed portfolio-collapsed-button portfolio-button tab" id ="head5" style="background-image: url(content/images/portfolio/somalisa.jpg)" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" onclick="if (document.getElementById('head5').getAttribute('aria-expanded') == 'false') {
                                                location.href = '#text5';
                                            } else {
                                                location.href = '#head5';
                                            }
                                            document.getElementById('head5').className += 'smoothScroll';" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="portfolio-button-text" id="text5">Somalisa Camp</span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                    3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div> -->



                    </div><!-- .panel-group -->

                </div> <!-- .tab-pane -->
            </div>
        </div>

<!--        <div class="linkButtons">
             Kopieer deze hele div om die buttons te krijgen 
            <table class="sidebar" id="sidebar" style="display: none">
                <tr>
                    <td>
                        <a class="icon" role="button">
                            <img src="content/images/icons/information.png" id="information" alt="Information">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="icon" role="button">
                            <img src="content/images/icons/tripadvisor.png" id="tripadvisor" alt="Tripadvisor">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="icon" role="button">
                            <img src="content/images/icons/maps.png" id="maps" alt="Map">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="icon" role="button">
                            <img src="content/images/icons/images.png" id="images" alt="Slideshow">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="icon" role="button" >
                            <img src="content/images/icons/website.png" id="website" alt="Website">
                        </a>
                    </td>
                </tr>
            </table>
        </div>-->

    </body>

</html>