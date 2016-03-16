app.controller('PickManyCtrl', function($scope) {
	$scope.answer = [false, false, false, false, false, false, false, false, false];

	$scope.toggleAnswer = function(i) {
		$scope.answer[i] = !$scope.answer[i];
	}
	
	$scope.getAnswer = function() {
		return $scope.answer.join();
	}
});