app.controller('RangeCtrl', function($scope) {

	$scope.value = 0;
	
	$scope.getAnswer = function() {
		return $scope.value;
	}
	
});