app.controller('navCtrl', function ($scope) {
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
})