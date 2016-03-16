app.controller('QuizCtrl', function($scope, $http, $uibModal, $cookieStore, $log, $window, $sce) {
	
	$scope.temp = template;	// Initial quiz template (will get assigned to $scope.template after the quiz data is loaded)
	$scope.question;
	$scope.progress;
	
	// Quiz styling
	$scope.defaultBackground = "./content/images/lion.jpg";
	$scope.background = $scope.defaultBackground;
	
	// Check answer
	$scope.checkAnswer = function(answer) {
		if (answer == null) return;

		$http.get("getQuizData.php?query=checkAnswer&chapter=" + chapter + "&question=" + $scope.question + "&answer=" + answer)
		.success(function(response) {
			$scope.getDataPoint(response).then(function(message) {
				$scope.openPopup(message.data, 'pop-up-' + response);
			});
		});
	}
		
	// Next quiz question
	$scope.next = function() {
		$scope.question++; // Increase the question number
		if ($scope.question > $scope.progress) // Increase the progress
			$scope.progress = $scope.question; 
		$scope.updateCookie();	// Update the cookie
		$scope.loadQuestion();
	}
	
	$scope.loadQuestion = function() {
		// Load the data for the next quiz and change the template
		// If the quiz is finished, show the 'complete' pop-up
		$scope.getDataPoint("type").then(function(response) {
			if (response.data == "complete") {
				$scope.getDataPoint("finish").then(function(message) {
					$scope.question--;
					$scope.updateCookie();
					$scope.openPopup($sce.trustAsHtml(message.data),'pop-up-complete');
				});
			} else {
				$scope.background = $scope.defaultBackground; // Change to the default background
				$scope.temp = 'quiz/' + response.data + '.html';
				$scope.loadData();
			}
		});
	}
	
	$scope.getCurrentQuestion = function() {
		var chapterCookie = $cookieStore.get('chapter' + chapter);				
		
		// If there is no cookie, start from 0
		if (chapterCookie == null) {
			$scope.question = 0;
			$scope.progress = 0;
			$scope.updateCookie();	// Create a cookie
		} else {
			$scope.question = chapterCookie[0];
			$scope.progress = chapterCookie[1];
		}
	}
	
	$scope.updateCookie = function() {

		var chapterCookie = $cookieStore.get('chapter' + chapter);
		$cookieStore.put('chapter' + chapter, new Array($scope.question, $scope.progress));

	}
	
	// Get a data point from the chapter XML
	$scope.getDataPoint = function(query) {
		return $http.get("getQuizData.php",
		{ params: { query: query, chapter: chapter, question: $scope.question } });
	}
	
	// Open a pop-up
    $scope.openPopup = function(message,popupClass) {
		
        var modalInstance = $uibModal.open({
			animation: true,
			templateUrl: popupClass,
			controller: 'PopupCtrl',
			keyboard: false, // Don't close form with ESC
			backdrop: 'static', // Don't close form by clicking outside
			windowClass: popupClass,
			resolve: {
				getMessage: function () {
					return message;
				}
			}
		});

		// Callback
		modalInstance.result.then(
			function(arg) {
				if (arg == "next") {
					$scope.next();
				}
				else {
					$window.location.href = "?p=report-card";
				}
			},
			function(arg) {
				// cancel
			}
		);
	};
	
	// Load quiz template data for a question
	$scope.loadData = function() {
		$scope.getDataPoint("data").then(function(response) {
			$scope.data = response.data;
			
			// Only change the template after the new question data is loaded
			//$scope.temp = $scope.temp + "?d=" + $scope.data;	// Add data parameter to cache unique templates
			$scope.temp = $scope.temp + "?t=" + $scope.getTime();	// Add time parameter to cache unique templates
			$scope.template = $scope.temp;	
			
		});
		$scope.getDataPoint("question").then(function(response) {
			$scope.title = response.data;
		});
		$scope.getDataPoint("question").then(function(response) {
			$scope.title = response.data;
		});
	}
	
	// Next: allowed if the next question is unlocked
	$scope.pressNext = function() {
		if ($scope.question < $scope.progress) {
			$scope.question++;
			$scope.updateCookie();
			$scope.loadQuestion();
		}
	}
	
	// Previous: allowed if not the first question
	$scope.pressPrev = function() {
		if ($scope.question > 0) {
			$scope.question--;
			$scope.updateCookie();
			$scope.loadQuestion();
		}
	}
	
	// Specific question: allowed if unlocked
	$scope.pressQuestion = function(n) {
		if (n <= $scope.progress) {
			$scope.question = n;
			$scope.updateCookie();
			$scope.loadQuestion();
		}
	}
	
	// Automatically increase the progress on the last question
	$scope.increaseProgress = function() {
		if ($scope.question == $scope.progress) {
			$scope.progress++;
			$scope.updateCookie();
		}
	}
	
	$scope.setBackground = function(bg) {
		$scope.background = bg;
	}
	
	$scope.getTime = function() {
		return Date.now();
	}
	
	// Initialization
	//$scope.question = 0; 	// Initial question number
	$scope.getCurrentQuestion();
	$scope.loadQuestion();
	//$scope.loadData();
	
});

app.controller('PopupCtrl', function($scope, $uibModalInstance, getMessage) {

	$scope.message = getMessage;
	
    $scope.ok = function(arg) {
        $uibModalInstance.close(arg);
    };

    $scope.cancel = function() {
        $uibModalInstance.dismiss('cancel');
    };
});