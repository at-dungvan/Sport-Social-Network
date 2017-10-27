var app = angular.module('myApp', ['ngRoute']);

app.config(function ($routeProvider, $locationProvider){
  $routeProvider
    .when('/home', 
	    {
	      templateUrl: 'app/views/default.html',
	    })
    .when('/contact-info/:contact_index', 
    	{
	      templateUrl: 'app/views/contact-info.html',
	      controller: 'contactInfoCtrl'
	    })
    .when('/add', 
	    {
	      templateUrl: 'app/views/contact-form.html',
	      controller: 'addContactCtrl'
	    })
    .when('/edit/:contact_index', 
	    {
	      templateUrl: 'app/views/contact-form.html',
	      controller: 'editContactCtrl'
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
