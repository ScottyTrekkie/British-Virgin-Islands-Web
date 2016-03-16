app.controller('sliderCtrl', function($scope, $timeout) {

	// Defaults
	$scope.kilo = 10;
	$scope.pos = 0;	// Margin-left for mover
	$scope.moving = false;
	$scope.buttonText = "Start";
	$scope.solved = false;
	
	$scope.toggleMove = function() {
		if ($scope.moving) {	
			// Stop moving
			$scope.moving = false;
			$scope.buttonText = "Start";
			
			// Check answer
			if ( 18 <= $scope.kilo && $scope.kilo <= 22) {
				return true;
			} else {
				// Reset slider
				$scope.kilo = 10;
				$scope.pos = 0;
				return false;
			}
		} else {
			// Start moving
			$scope.buttonText = "Stop";
			$scope.moving = true;
			$scope.move()
		}
		return null;
	}
    
	$scope.move = function() {
		if ( $scope.pos < 605 ) {
			if ($scope.moving) {
				if ($scope.pos % 31 == 0)
						$scope.kilo += 1;
				$scope.pos += 1;
				$timeout($scope.move, 15); 
			}
		} else {
			// End of slider reached
			$scope.toggleMove();
		}
	}
	
});