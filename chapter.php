<!DOCTYPE html>
<?php
/**
 * This php-file loads any chapter's content. ChapterID is taken from URL. 
 * Legitimate chapterIDs are 20, 24, 23, 60, 21, 35. Without a set $chapterID 
 * variable, this file will not be included properly.
 */
$chapter = simplexml_load_file("http://travpro.yourworldapps.nl/API/app/create-web.php?chapterID=" . $chapterID);

$pages = $chapter->page;

// if chapter is Our Story
if ($chapterID == 20) {
    unset($pages[0]);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>African Bush Camps Foundation</title>

        <script type="text/javascript" src="script/sidebar.js"></script>
    </head>
    <body>

        <?php if ($chapterID == 20): //if Our Story ?>
            <a id="hidden" class="fancybox-media" href="https://www.youtube.com/watch?v=aQFL3vXzNDw" style="display:none;">
            <?php endif; ?>

            <nav class="navbar navbar-default navbar-fixed-top secondNav">
                <div class ="container menu-offset">
                    <ul class="nav navbar-nav navbar-left">
                        <?php
                        //if Our Story 
                        if ($chapterID == 20):
                            ?>
                            <li class="SubNavigation-item"><a class="smoothScroll fancybox-media" href="https://www.youtube.com/watch?v=aQFL3vXzNDw">Video</a></li>
                            <?php
                        endif;
                        foreach ($pages as $page): //for each page in this chapter 
                            ?> 
                            <li class="SubNavigation-item"><a class="smoothScroll" href="#<?php echo $page->page_number; ?>">
                                    <?php echo $page->title; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>

            <!-- Foundation specific content -->
            <article>
                <?php foreach ($chapter->page as $page): //for each page in this chapter     ?> 
                    <section id="<?php echo $page->page_number; ?>">
                        <div class="jumbotron" style="background-image: url(<?php echo $page->image; ?>)">
                            <div class='container'>
                                <h1><?php echo $page->title; ?></h1>
                            </div>
                        </div>

                        <div class="container">
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
                        </div>
                    </section>
                <?php endforeach; ?>
            </article>

            <?php if ($chapterID == 20): // if Our Story ?>
                <script src="script/story.js"></script>
            <?php endif; ?>
    </body>
</html>
