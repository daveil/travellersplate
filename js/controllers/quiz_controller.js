define(['app'],function(app){
	app.controller('QuizController', function ($rootScope, $scope,$timeout) {
		$scope.Loading=true;
		$scope.Progress=0;
		$scope.CurrentIndex=0;
	});
});