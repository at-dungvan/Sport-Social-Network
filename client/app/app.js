var app = angular.module('myApp', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider){
  $routeProvider
    .when('/home', 
	    {
	      templateUrl: 'app/views/default.html',
	    })
    .when('/contact-info/:match_index', 
    	{
	      templateUrl: 'app/views/match-info.html',
	      controller: 'matchInfoCtrl'
	    })
    .when('/add', 
	    {
	      templateUrl: 'app/views/match-form.html',
	      controller: 'addMatchCtrl'
	    })
    .when('/edit/:contact_index', 
	    {
	      templateUrl: 'app/views/match-form.html',
	      controller: 'editMatchCtrl'
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
    .otherwise({redirectTo: '/home'});
});
