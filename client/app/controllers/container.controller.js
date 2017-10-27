app.controller('containerCtrl', function ($scope, ContactService){
	$scope.contacts = ContactService.getContacts();

	$scope.removeContact = function (item) {
		var index = $scope.contacts.indexOf(item);
		$scope.contacts.splice(index, 1);
		$scope.removed = 'Contact successfully removed.';
	};
});

