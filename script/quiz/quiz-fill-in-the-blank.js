app.controller('FillInTheBlankCtrl', function($scope) {

	$scope.value = "";
	
	$scope.getAnswer = function() {
		return $scope.value;
	}
	
});