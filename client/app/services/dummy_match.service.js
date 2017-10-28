app.factory('DummyMatchService', [function () {
  var factory = {};

  factory.getMatches = function () {
    return matches;
  }

  // contact list, usually would be a separate database
  var matches = [
    { name: 'Giao hữu 13T2-13T3', place: 'Sân thể chất', date: '2017/10/27', time: '17:30', team0: {name: '13T2'}, team1: {name: '13T3'}},
    { name: 'Đồng hương Quảng Trị', place: 'Sân Nguyễn Chánh', date: '2017/10/27', time: '06:30', team0: {name: 'Đông Hà'}, team1: {name: 'Hải Lăng'}},
    { name: 'Giao lưu 10T3-15T3', place: 'Sân Mỹ Đình', date: '2017/10/28', time: '15:30', team0: {name: '10T3'}, team1: {name: '15T3'}},
    { name: 'Giao lưu SP-BK', place: 'Sân sư phạm', date: '2017/10/28', time: '10:50', team0: {name: 'Bách Khoa'}, team1: {name: 'Sư Phạm'}},
    { name: 'Giao lưu Khoa TP-IT', place: 'Sân bách khoa', date: '2017/10/28', time: '15:30', team0: {name: 'Khoa TP'}, team1: {name: 'Khoa IT'}},
    { name: 'Giao lưu Huế - Đà Nẵng', place: 'Sân Mỹ Đình', date: '2017/10/28', time: '15:30', team0: {name: 'Huế'}, team1: {name: 'Đà Nẵng'}},
    { name: 'Giao lưu CTSV-13T2', place: 'Sân Mỹ Đình', date: '2017/10/28', time: '15:30', team0: {name: 'CTSV'}, team1: {name: '13T2'}},
  ];
  
  return factory;
}]);
