app.controller('contactInfoCtrl', function ($scope, $routeParams){
	var index = $routeParams.contact_index;
	$scope.currentContact = $scope.contacts[index];
})