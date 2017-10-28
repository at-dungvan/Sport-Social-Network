app.controller('navCtrl', function ($scope, userService) {
  $scope.nav = {
    navItems: [
    	{
    		link: 'home',
    		display: 'Trang Chủ'
    	},
    	{
    		link: 'add',
    		display: 'Tạo Trận Đấu'
    	},
    	{
    		link: 'login',
    		display: 'Đăng Nhập'
    	},
        {
            link: 'signup',
            display: 'Đăng Ký'
        }
    ],
    selectedIndex: 0,
    navClick: function ($index) {
      $scope.nav.selectedIndex = $index;
    }
  };

  $scope.isShow = function() {
    if (!userService.getToken()){
        return false;
    }
    return true;
  }
})