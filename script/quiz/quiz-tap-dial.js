app.controller('TapDialCtrl', function($scope) {
	$scope.min = 0;
	$scope.max = 9;
	$scope.np = 0;
	
	$scope.increase = function() {
		if ($scope.np < $scope.max) $scope.np++;
	}
	
	$scope.decrease = function() {
		if ($scope.np > $scope.min) $scope.np--;
	}	
	
	$scope.getAnswer = function() {
		return $scope.np;
	}
});