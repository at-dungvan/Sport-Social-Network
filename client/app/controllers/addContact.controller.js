app.controller('addContactCtrl', function ($scope, $location) {
  //needed to show the correct button on the contact form
  $scope.path = $location.path();

  $scope.addContact = function () {
    var contact = $scope.currentContact;
    contact.id = $scope.contacts.length;
    $scope.contacts.push(contact);
  };

})