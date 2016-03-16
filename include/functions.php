<?php

/*
 * This php file contains custom functions used throughout multiple places on the
 * website.
 */

/**
 * Returns a string of the specified page's content, with non-html tags replaced
 * properly.
 * 
 * @param type $page The page to load the text content from. This page should be
 * obtained from a chapter's xml, such that the page contains the necessary 
 * content for this function to work.
 */
function load_page_content($page) {
    //get text as html
    $pretext1 = html_entity_decode($page->text);

    //replace non-html tags with proper html tags
    // fix image tags
    $pretext2 = str_replace(array("<_image>", "</_image>"), array("<img src=\"", "\"/>"), $pretext1);
    // fix bullet point tags
    $pretext3 = str_replace(array("<_bullet>", "</_bullet>"), array("<div>• ", "</div>"), $pretext2);
    // fix subtitle tags
    $text = str_replace(array("<subtitle>", "</subtitle>"), array("<br/><br/><b>", "</b>"), $pretext3);

    return $text;
}

/**
 * This function includes a sidebar for the specified page.
 * 
 * @param type $page the specified page
 */
function include_sidebar($page) {
    //open link buttons div
    echo '<div class="linkButtons">
        <table class="sidebar">';

    for ($i = 1; $i <= 5; $i++) {
        $link = $page->xpath("link_" . $i)[0];
        $link_type = $page->xpath("link_type_" . $i)[0];

        if ($link == "") {
            // skip if no link
            continue;
        }

        echo '<tr><td>';
        
        if ($link_type == "map") {
            echo '<a role="button" href="' . $link . '">
                    <img src="content/images/icons/maps.png" alt="Map">
                </a>';
        } 
        elseif ($link_type == "slideshow") {
            echo '<a role="button" onclick="sidebar_slideshow(' . $link . ')">
                    <img src="content/images/icons/images.png" alt="Slideshow">
                </a>';
        }
        elseif ($link_type == "other") {
            $icon = $image = "content/images/icons/information.png";
            if ($link == "http://www.africanbushcampsfoundation.org/?page_id=101") { //get involved
                $icon = "content/images/icons/GetInvolved.png";
            }
            elseif ($link == "http://www.africanbushcampsfoundation.org/?page_id=534") { //partners
                $icon = "content/images/icons/partners.png";
            }
            elseif ($link == "http://www.africanbushcamps.com/african-bush-camps-foundation/projects-in-botswana/") {
                $icon = "content/images/icons/bots.png";
            }
            elseif ($link == "http://www.africanbushcamps.com/african-bush-camps-foundation/projects-in-zimbabwe/") {
                $icon = "content/images/icons/zim.png";
            }
            elseif (substr($link, -4) == ".jpg"){
                $icon = "content/images/icons/information.png";
            }
            elseif ($link == "Safari-Logistics.png") {
                $icon = "content/images/icons/plane.png";
            }
            elseif (parse_url($link)['host'] == "www.tripadvisor.com") {
                $icon = "content/images/icons/tripadvisor.png";
            }
            
            echo '<a role="button" onclick="sidebar_open(\'' . $link . '\')">
                    <img src="'.$icon.'" alt="Other">
                </a>';
        }
        else {// including ($link_type == "weblink") 
            echo '<a role="button" onclick="sidebar_open(\'' . $link . '\')">
                    <img src="content/images/icons/website.png" alt="Weblink">
                </a>';
        }
        
        echo'</td></tr>';
    }

    //close link buttons div
    echo '</table></div>';
}
