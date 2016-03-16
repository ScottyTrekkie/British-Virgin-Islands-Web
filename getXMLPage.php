<?php
include("include/functions.php");

$chapter = simplexml_load_file("http://travpro.yourworldapps.nl/API/app/create-web.php?chapterID=" . $_GET['id']);
$title = html_entity_decode($_GET['title']);

/*
foreach ($chapter->page as $page) {
	if ($title == $page->title) {
		echo "<div class=\"container menu-offset\">";
		echo "<article><section id=\"" . $page->page_number . "\">\r\n";
		echo "<h1>" . $page->title . "</h1>\r\n";
		echo "<div class=\"jumbotron\" style=\"background-image:url('" . $page->image . "');\"></div>\r\n";
		echo load_page_content($page);
		echo "</section></article></div>";
		break;
	}
}
*/
foreach ($chapter->page as $page) {
	if ($title == $page->title) {
?>
	<article>
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
						<?php include_sidebar($page); ?>
					</div>
				</div>
			</div>
		</section>
	</article>
<?php
	}
}
?>