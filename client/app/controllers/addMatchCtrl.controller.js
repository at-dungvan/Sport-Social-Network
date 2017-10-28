app.controller('addMatchCtrl', function ($scope, $http, $window, $location, userService) {
  $scope.path = $location.path();
  console.log(userService.getToken());
  $scope.createMatch = function () {
        var req = {
            method: 'POST',
            url: 'http://sport-social.ddns.net/matches',
            headers: {
                'Content-Type': 'application/json',
                'Authorization' : userService.getToken()
            },
            data: {
                "name": $scope.name,
				"place": $scope.place,
				"date": $scope.date,
				"time": $scope.time,
				"team0": null,
				"team1": null
            }
        };
        $http(req).then(function (res) {
        	console.log(res);
            $window.location.href = '#/home';
        }, function (err) {
            console.log("Error: ", err);
        });
    }
})