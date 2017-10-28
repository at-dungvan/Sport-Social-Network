app.factory('userService', function() {
	 var data = {};

	 function setToken(d) {
	   data = "Bearer " + d;
	 }

	 function getToken() {
	  return data;
	 }

	 return {
		setToken: setToken,
		getToken: getToken
	 }
});