app.controller('myCtrl', function($scope,$timeout){
	$scope.layout = '1';
	$scope.layoutx = '1';
	$scope.check = function(x) {
		$scope.layout = x;
		$timeout(function() {
			$scope.layoutx = $scope.layout;
		},250)
	};
});

