<?php
// If loggedIn is false, don't display the quiz
if (isset($_COOKIE["loggedIn"])) {
	if ($_COOKIE["loggedIn"] !== "true") 
		exit();
} else {
	exit();
}

// If no chapter is selected, go back to the report card
if (!isset($_GET["chapter"])) {
	echo "<script type=\"text/javascript\">window.location = \"?p=report-card\"</script>";
}

$modules = array(
	0 => array("", false), // multiple choice
	1 => array("script/quiz-checkbox.js", false),
	2 => array("script/quiz-drag-and-drop.js", false),
	3 => array("script/quiz-pickmany.js", false),
	4 => array("script/quiz-dial.js", false),
	5 => array("", false),	//icons
	6 => array("script/quiz-range.js", false),
	7 => array("script/quiz-fill-in-the-blank.js", false),
	8 => array("", false),	//multiple choice images
	9 => array("script/quiz-slider.js", false),
	10 => array("script/quiz-tap-dial.js", false),
	11 => array("script/quiz-page.js", false),
	12 => array("script/quiz-video.js", false)
);
?>

<!-- CSS specific for quiz -->  
<link rel="stylesheet" href="style/popup.css">
<link rel="stylesheet" href="style/quiz-style.css">

<?php

// Get the chapter page
$chapter = filter_input(INPUT_GET, 'chapter', FILTER_SANITIZE_URL);

// Load in the xml quiz file
$file = 'quiz/chapter' . $chapter . '.xml';
$xml = simplexml_load_string(file_get_contents($file)) or die("Error: Cannot create object");


// Load quiz modules
echo "<!-- Quiz Modules-->\r\n";
foreach ($xml->question as $question) {
	$index = intval($question->type)-1;
	if (!$modules[$index][1]) {
		echo "<script src=\"" . $modules[$index][0] . "\"></script>\r\n"; 
		$modules[$index][1] = true;
	}
}

// Chapter and template javascript to be accessed from AngularJS
echo "<script type=\"text/javascript\">var chapter = $chapter, template;</script>";
?>

<div class="jumbotron" style="display: table; width:100%;" ng-controller="QuizCtrl" ng-cloak>

	<div ng-style="{'background-image':'url('+background+')', 'background-size':'100% 100%', 'width':'100%', 'height':'100%',
	'top':'0','bottom':'0','left':'0','right':'0','z-index':'-1','position':'absolute','opacity':'0.8'}">
	</div>

	<nav class="navbar navbar-default navbar-fixed-top secondNav" style="text-align:center">
		<ul class="pagination pagination-lg">
		<li ng-class="{disabled:question==0}">
		  <a ng-click="pressPrev()" aria-label="Previous">
			<i class="fa fa-chevron-left fa-lg"></i>
		  </a>
		</li>
		<?php
		for ($i = 0; $i < count($xml->question); $i++ )
			echo "<li ng-class=\"{active: $i==question, disabled:$i>progress}\">
			<a ng-click=\"pressQuestion($i)\">" . ($i+1) . "</a></li>"
		?>
		<li ng-class="{disabled:question==progress}">
		  <a ng-click="pressNext()" aria-label="Next">
			<i class="fa fa-chevron-right fa-lg"></i>
		  </a>
		</li>
	</nav>

	<div style="width:100%; margin: 100px auto auto auto" ng-include="template"></div>
	<!-- Quiz Popup templates -->
	<script type="text/ng-template" id="pop-up-correct">
		<div class="modal-body">
			<button type="button" class="close" ng-click="cancel()" aria-hidden="true">&times;</button>
			<div style="padding: 10%; height:100%;">
				<p>{{message}}</p><br>
				<div style="text-align:center;">
					<button class="btn btn-primary" type="button" ng-click="ok('next')">CONTINUE ></button>
				</div>
			</div>
		</div>
	</script>
	<script type="text/ng-template" id="pop-up-incorrect">
		<div class="modal-body">
			<button type="button" class="close" ng-click="cancel()" aria-hidden="true">&times;</button>
			<div style="padding: 10%; height:100%; ">
				<p>{{message}}</p>
			</div>
		</div>
	</script>
	<script type="text/ng-template" id="pop-up-complete">
		<div class="modal-body">
			<div class="content">
				<div class="check"></div>
				<div style="padding: 5% 10% 10% 10%; height:100%; ">
					<p ng-bind-html="message"></p><br>
					<div style="text-align:center;">
						<button class="btn btn-primary btn-sm round" type="button" ng-click="ok('finish')">CONTINUE</button>
					</div>
				</div>
			</div>
		</div>
	</script>
</div>

<script src="script/quiz.js"></script> 