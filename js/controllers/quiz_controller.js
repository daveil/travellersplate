define(['app'],function(app){
	app.controller('QuizController', function ($rootScope, $scope,$http) {
		$scope.Loading=true;
		$scope.Progress=0;
		$scope.CurrentIndex=0;
		$http({
			'method':'GET',
			'url':'api/questions.json'
		}).then(function success(response){
			console.log(response.data);
		});
	});
});