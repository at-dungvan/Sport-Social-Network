app.controller('editMatchCtrl', function ($scope, $routeParams){
	$scope.index = $routeParams.contact_index;
	$scope.currentContact = $scope.contacts[$scope.index];
})