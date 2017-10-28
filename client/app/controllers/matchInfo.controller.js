app.controller('matchInfoCtrl', function ($scope, $routeParams){
	var index = $routeParams.match_index;
	$scope.currentContact = $scope.contacts[index];
})