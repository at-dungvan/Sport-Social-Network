app.controller('LoginController', function ($scope, $http, $window, userService) {
	$scope.login = function () {
        var req = {
            method: 'POST',
            url: 'http://sport-social.ddns.net/users/login',
            headers: {
                'Content-Type': 'application/json',
                'accept' : 'application/json'
            },
            data: {
                "email": $scope.email,
                "password": $scope.password
            }
        };
        $http(req).then(function (res) {
            userService.setToken(res.data.data.access_token);
            $window.location.href = '#/home';
        }, function (err) {
            console.log("Error: ", err);
        });
    }
});