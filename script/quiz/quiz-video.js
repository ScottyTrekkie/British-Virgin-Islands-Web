app.controller('VideoCtrl', function($scope, $sce) {
	
	$scope.videoURL;
	
	$scope.loadVideo = function(id) {
		var url = "http://www.youtube.com/v/" +id + "?autohide=1&autoplay=1&rel=0&color=white&modestbranding=1&showinfo=0&theme=light";
		$scope.videoURL = $sce.trustAsResourceUrl(url);
	}
	
});