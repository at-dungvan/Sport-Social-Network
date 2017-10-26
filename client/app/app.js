var app = angular.module('myApp', ['ngRoute']);

app.config(function ($routeProvider) {
	$routeProvider
		.when('/',
			{
				controller: 'HomeController',
				templateUrl: 'app/views/home-page.html'
			})
		.when('/login',
			{
				controller: 'LoginController',
				templateUrl: 'app/views/login-page.html'
			})
		.when('/signup',
			{
				controller: 'SignUpController',
				templateUrl: 'app/views/signup-page.html'
			})
		.otherwise({ redirectTo: '/' });
});