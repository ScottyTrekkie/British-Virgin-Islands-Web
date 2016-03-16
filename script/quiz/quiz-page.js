app.controller('PageCtrl', function($scope, $http, $sce) {
	
	$scope.page = "";
	
	$scope.loadPage = function(id,title) {
		var url = "./getXMLPage.php?id=" + id + "&title=" + encodeURIComponent(title);
		$http.get(url)
		.success(function(response) {
			$scope.page = $sce.trustAsHtml(response);
		});
	}
	
});