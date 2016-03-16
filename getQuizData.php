<?php
if (isset($_GET['query']) && isset($_GET['chapter']) && isset($_GET['question'])) {
	// Load the xml file for the current chapter
	$file = 'quiz/chapter' . $_GET['chapter'] . '.xml';
	$xml = simplexml_load_string(file_get_contents($file)) or die("error");
	$question = $xml->question[intval($_GET['question'])];
	
	// Return 'complete' if the chapter has ended
	if ($_GET['question'] > count($xml->question) - 1 && $_GET['query']!="finish")
		die("complete");
	
	// Return the right data point for the query
	switch($_GET['query']) {
		case "question":
			die($question->question);
		case "type":
			die($question->type);
		case "data":			
			$data = array();
			foreach ($question->data as $value) {
				array_push($data,"\"" . $value . "\"");
			}
			echo "[" . implode(",",$data) . "]";
			exit();
			break;
		case "checkAnswer":
			if (isset($_GET['answer'])) {
				$rightanswer = strtolower(strval($question->answer));
				$useranswer = strtolower(strval($_GET['answer']));
				if ($rightanswer == $useranswer) {
					die("correct");
				} else {
					die("incorrect");
				}
			}
			break;
		case "correct":
			die($question->correct);
		case "incorrect":
			die($question->incorrect);
		case "finish":
			die(html_entity_decode($xml->finish));
		case "questions":
			die(count($xml->question));
	}
}

?>