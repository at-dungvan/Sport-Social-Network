app.factory('MatchService', function ($http) {
  var data = {};
  data.matches;

  // contact list, usually would be a separate database
  function getData() {
    var req = {
            method: 'GET',
            url: 'http://sport-social.ddns.net/matches?page=26',
            headers: {
                'Content-Type': 'application/json',
            }
        };
        return $http(req);
  }

  return {
    getData: getData
  }  

});