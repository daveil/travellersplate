define(['app'],function(app){
	app.controller('QuizController', function ($rootScope, $scope,$http) {
		$scope.Loading=true;
		$scope.QuizProgress=0;
		$scope.CurrentIndex=0;
		$scope.NoOptionSelected=true;
		$scope.questions = [];
		$scope.responses = [];
		
		
		$http({
			'method':'GET',
			'url':'api/questions.json'
		}).then(function success(response){
			$scope.questionnaire = response.data;
			$scope.FinalIndex = response.data.length-1;
			
			//Get Progress Percentage Base On Data Lenght 
			$scope.QuizProgressPercentage = 100/response.data.length;
		});
		
		$scope.navigate =  function(action){
			//Submit Form
			if(action == "next" && $scope.CurrentIndex == $scope.FinalIndex && $scope.responses[$scope.CurrentIndex]){
				document.getElementById("ProcessForm").submit();
				//return;
			}
			
			//Navigation Handler
			if(action == "next" && !$scope.NoOptionSelected) {
				$scope.CurrentIndex++;
				$scope.QuizProgress += $scope.QuizProgressPercentage;
				
				if(!$scope.responses[$scope.CurrentIndex]){
					$scope.NoOptionSelected=true;
				}
			}else if(action == "prev"){
				$scope.CurrentIndex--;	
				$scope.QuizProgress -= $scope.QuizProgressPercentage;
				$scope.NoOptionSelected=false;
			}
		}
		
		$scope.selected =  function (question_id, option_id){
			//Accumulate Data
			$scope.questions[$scope.CurrentIndex]=question_id
			$scope.responses[$scope.CurrentIndex]=option_id;
			//Reset NoOptionSelected Filter
			$scope.NoOptionSelected = false;
		}
	});
	
});