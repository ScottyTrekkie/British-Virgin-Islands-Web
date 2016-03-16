var app = angular.module('abc', ['ngAnimate', 'ui.bootstrap', 'ngCookies']);
app.controller('LoginCtrl', function ($scope, $uibModal, $cookieStore, $log) {
	
	// Set login cookies
	if ($cookieStore.get('popupLogin') == null)
		$cookieStore.put('popupLogin', true);	// Popup the login form
	
	if ($cookieStore.get('loggedIn') == null)	
		$cookieStore.put('loggedIn', false);	// True if user is logged in
	
	if ($cookieStore.get('email') == null)	
		$cookieStore.put('email', "");			// Email of user	
	
	// Handle login: determine to log-in or log-out
	$scope.handleLogin = function() {
		if ($cookieStore.get('loggedIn')) {
			$scope.logout();
		} else {
			$scope.openLogin();
		}
	}
	
	// Popup modal form
	$scope.popup = function() {
		if ($cookieStore.get('popupLogin'))
			$scope.openLogin();
	}
	
	$scope.logout = function() {
		$cookieStore.put('popupLogin', true);
		$cookieStore.put('loggedIn', false);
		$cookieStore.put('email', "");
		$scope.load();
		
		// Reload the page if you login from the safari starter kit
		// Maybe the safari starter should check the login instead of login.js
		if (location.search.toLowerCase() == "?p=safaristarterkit")
			location.reload();
	}
	
	// Open login modal form
	$scope.openLogin = function () {

		// Modal form options
		var modalInstance = $uibModal.open({
			animation: true,
			templateUrl: 'loginModal.html',
			controller: 'ModalInstanceCtrl',
			size: 'lg',
			keyboard: false,	// Don't close form with ESC
			backdrop: 'static',	// Don't close form by clicking outside
			windowClass: 'login-window',
			resolve: {
			}
		});
		
		// Callback
		modalInstance.result.then(
			function (arg) {
				$cookieStore.put('loggedIn', true);
				$cookieStore.put('popupLogin', false);
				$cookieStore.put('email', arg.email);
				$cookieStore.put('name', arg.name);
				$scope.load();
				
				// Reload the page if you login from the safari starter kit
				// Maybe the safari starter should check the login instead of login.js
				if (location.search.toLowerCase() == "?p=safaristarterkit")
					location.reload();
			},
			function (arg) {
				$cookieStore.put('popupLogin', false);
			}
			
		);
	};
	
	// Sets the login cookie variables
	$scope.load = function () {
		if ($cookieStore.get('loggedIn')) {
			$scope.buttonText = "Log out";
			var name = $cookieStore.get('name');
			if (name != null && name != "")
				$scope.loggedInText = "Welcome back " + name + "!";
		} else {
			$scope.buttonText = "Log in";
			$scope.loggedInText = "";
		}
	}
	
	$scope.load();
	
});

app.controller('ModalInstanceCtrl', function ($scope, $http, $uibModalInstance) {

	$scope.clientID = '557B3DDE87136-072';
	$scope.template = 'welcome';

	$scope.yes = function() {
		$scope.email = '';
		$scope.emailSucces(false);
		$scope.hideerror = "ng-hide";
		$scope.template='email';
	}
	
	$scope.newProfile = function(found) {
		// Update profile
		if (found) {
			$scope.message = "Terrific, just look at the information below and update if needed. Then simply hit submit to unlock the app."
			$scope.emailnew = $scope.email;
		// Create new profile
		} else {
			$scope.message = "Unfortunately we couldn't find a match for that email. Please fill out this short form below and ‘submit’ to create a new profile, or tap Try Again to enter another existing business email address.";
			$scope.firstname = "";
			$scope.lastname = "";
			$scope.agency = "";
			$scope.state = "";
			$scope.emailnew = $scope.email;
		}
		
		$scope.template='newProfile';
	}
	
	$scope.submitEmail = function() {
		if ($scope.email==null) {
			// Invalid email
			$scope.emailerror = "Please enter a valid email address";
			$scope.hideerror = "";
		} else if ($scope.email == "") {
			// Empty email
			$scope.emailerror = "Please enter an email address";
			$scope.hideerror = "";
		} else {
			var url = "http://tarewards.com/apiconage/api/getcontact?client_id=";
			$http.get(url + $scope.clientID  + "&email_address=" + $scope.email)
			.success(function(response) {
					if (response.result == "success") {
						// Email not found
						if (response.response.length==0) {
							$scope.newProfile(false);
						// Email found
						} else {
							$scope.agency = response.response.agency_name;
							$scope.firstname = response.response.first_name;
							$scope.lastname = response.response.last_name;
							$scope.state = response.response.state;	
							$scope.template='recordFound';	
						}
					} else {
					}
				}
			);
		}
	}
	
	$scope.tryAgain = function() {
		$scope.email = "";
		$scope.emailSucces(false);
		$scope.hideerror = "ng-hide";
		$scope.template='email';
	}
	
	$scope.submitProfile = function() {
		// Update contact data
		var url = "http://tarewards.com/apiconage/api/updatecontact" +
		"?client_id=" + $scope.clientID + "&email_address=" + $scope.emailnew + 
		"&first_name=" + $scope.firstname + "&last_name=" + $scope.lastname +
		"&agency_name=" + $scope.agency + "&state=" + $scope.state;
		
		$http.get(url).success(function(response) {
				// Succes and email already exist or not exist
				if (response.result == "success") {
					$scope.ok({email: $scope.emailnew, name: $scope.firstname});
				// Fail
				} else {
				}
			}
		);
	}
	
	$scope.validateemail = function () {
		if ($scope.email!=null && $scope.email != "") {
			$scope.emailSucces(true);
		} else {
			$scope.emailSucces(false);
		}
	}
	
	$scope.emailSucces = function(success) {
		if (success) {
			$scope.hidesuccessglyph = "";
			$scope.emailclass = "has-success has-feedback";
		} else {
			$scope.hidesuccessglyph = "ng-hide";
			$scope.emailclass = "";
		}
	}
	
	// Close the login form
	$scope.no = function() {
		$uibModalInstance.dismiss('cancel');
	}

	// Complete the login form
	$scope.ok = function (arg) {
		$uibModalInstance.close(arg);
	};

});