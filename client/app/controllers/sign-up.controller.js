app.controller('SignUpController', function ($scope, $http, $window) {
    $scope.signup = function () {
        var req = {
            method: 'POST',
            url: 'http://sport-social.ddns.net/users',
            headers: {
                'Content-Type': 'application/json',
            },
            data: {
                "full_name": $scope.fullname,
                "email": $scope.email,
                "password": $scope.password,
                "password_confirmation": $scope.password_confirmation
            }
        };
        $http(req).then(function (res) {
            $window.location.href = '#/login';
        }, function (err) {
            console.log("Error: ", err);
        });
    }
});