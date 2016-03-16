app.controller('CheckboxCtrl', function($scope) {
	$scope.answer = [false, false, false, false, false];

	$scope.toggleAnswer = function(i) {
		$scope.answer[i] = !$scope.answer[i];
	}
	
	$scope.getAnswer = function() {
		return $scope.answer.join();
	}
});


/*
var button1 = false;
var button2 = false;
var button3 = false;
var button4 = false;
var button5 = false;

var overlayDiv = function(choice){ 
    
    var answer1 = true, answer2 = true, answer3 = true, answer4 = true, answer5 = true;
    var correct;
        if (button1 == answer1 && button2 == answer2 && button3 == answer3 && button4 == answer4  && button5 == answer5) {
            correct = "#correct";
            update("chapter1", 1, true);
        } else correct = "#incorrect";
        $(correct).overlay({
           api: true,  
           top: 260,
           mask: {
               color: '#fff',
               loadSpeed: 200,
               opacity: 0.5
           },
           closeOnClick: false,
           load: false
       })
       $(correct).data("overlay").load();
   };

var toggleAnswer = function(choice) {
    document.getElementById(choice).style.backgroundColor = '#337ab7';
    if (choice == '1') {
        if (button1 == true) {
            console.log('button 1 is now false');
            button1 = false;
            document.getElementById(choice).style.backgroundColor = '#8b8b7a';
        } else {
            button1 = true;
            console.log('button 1 is now true');
            document.getElementById(choice).style.backgroundColor = '#337ab7';
        }
    } else if (choice == '2') {
        if (button2 == true) {
            button2 = false;
            document.getElementById(choice).style.backgroundColor = '#8b8b7a';
        } else {
            button2 = true;
            document.getElementById(choice).style.backgroundColor = '#337ab7';
        }
    } else if (choice == '3') {
        if (button3 == true) {
            button3 = false;
            document.getElementById(choice).style.backgroundColor = '#8b8b7a';
        } else {
            button3 = true;
            document.getElementById(choice).style.backgroundColor = '#337ab7';
        }
    } else if (choice == '4') {
       if (button4 == true) {
            button4 = false;
            document.getElementById(choice).style.backgroundColor = '#8b8b7a';
        } else {
            button4 = true;
            document.getElementById(choice).style.backgroundColor = '#337ab7';
        }
    } else  {
        if (button5 == true) {
            button5 = false;
            document.getElementById(choice).style.backgroundColor = '#8b8b7a';
        } else {
            button5 = true;
            document.getElementById(choice).style.backgroundColor = '#337ab7';
        }
    }
    
}
$(document).ready(function() {    
    $(".btn-quiz").click(function(event){
    var choice = event.target.id;
    if (choice == 'next') {
        window.location.href = "quiz2.html";
    } else if (choice == 'back') {
        window.location.href = "index.html";
    } else if (choice == 'again') {
       $("#incorrect").overlay().close();
    } else if (choice == 'submit') {
        overlayDiv(choice);
    } else toggleAnswer(choice);
    //$('#correct').overlay().load();
    });

});
*/