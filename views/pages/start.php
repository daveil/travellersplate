<style>
	#question{
		font-size:14pt;
	}
	.hide{display:none;}
</style>
<script data-main="js/config" src="js/bower_components/requirejs/require.js"></script>
<div class="ui-container ng-cloak" ng-controller="QuizController">
	<!--Top Bar-->
	<div class="ui-wrapper hide" id="TopBar" ng-class="{hide:Loading}">
		<div class="ui-sidebar"></div>
		<div class="ui-top">
				<div class="progress" >
				  <div class="progress-bar  progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{QuizProgress}}%;">
					<span class="sr-only">{{QuizProgress}}% Complete</span>
				  </div>
				</div>
		</div>
		<div class="ui-sidebar"></div>
	</div>

	<!--Preloader-->
	<div class="ui-wrapper" id="LoadingScreen" ng-class="{hide:!Loading}">
		<div class="ui-sidebar ui-left">
			
		</div>
		<div class="ui-main">
				<div class="ui-content">
						<h2 class="text-center">One moment please</h2>
						<!--Fake preloading-->
					<p>
						Loading content. <a ng-click="Loading=false">( Fake preloader click me)</a>
					</p>

				</div>
				
		</div>
		<div class="ui-sidebar ui-right">
			
		</div>

	</div>

	<!-- Main-->
	<div class="ui-wrapper hide" id="MainScreen" ng-class="{hide:Loading}">
		<div class="ui-sidebar ui-left">
			<button type="button" class="btn btn-default btn-lg"  ng-click="navigate(CurrentIndex-1)" >
				   &nbsp;<span class="glyphicon glyphicon-chevron-left"></span> &nbsp;
			</button>
		</div>
		<div class="ui-main">
				<div class="ui-content">
					<div id="qa-content">
					<p id="question">
						Which of these do you enjoy eating the most?<br>
					</p>
					
					
				</div>
				</div>
				<div class="ui-content">
					<!-- Use ng-repeat for Options-->
					<div id="options" class="list-group" >
						<button type="button" class="list-group-item">
							A Plate of Sushi
						</button>
						<button type="button" class="list-group-item">
							A Fruit & Vegetable Salad Wrap
						</button>
						<button type="button" class="list-group-item">
							A Bacon Cheeseburger
						</button>
						<button type="button" class="list-group-item">
							A Bag of Cheetos
						</button>
					</div>
				</div>
		</div>
		<div class="ui-sidebar ui-right">
			<a type="button" href="almost-done" class="btn btn-default btn-lg"  ng-click="navigate(CurrentIndex+1)" >
				   &nbsp;<span class="glyphicon glyphicon-chevron-right" ></span> &nbsp;
			</a>
		</div>

	</div>
</div>

