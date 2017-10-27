app.controller('HomeController', function ($scope, $location) {
	$scope.isShow = function() {
		if($location.path() == "/login" || $location.path() == "/signup") {
			return false;
		}
		return true;
	}
});