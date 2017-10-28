app.controller('containerCtrl', function ($scope, DummyMatchService){
	// MatchService.getData().then(function (res) {
	// 	$scope.contacts = res.data.data;
	// 	console.log("getData function:", res);
	// });
	$scope.contacts = DummyMatchService.getMatches();
	$scope.removeContact = function (item) {
		var index = $scope.contacts.indexOf(item);
		$scope.contacts.splice(index, 1);
		$scope.removed = 'Contact successfully removed.';
	};
});

