<style>
	#question{
		font-size:14pt;
	}
	#LoadingScreen .ui-content,#MainScreen .ui-content{
		padding-top:15%;
	}
	.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus,.list-group-item.active:active{
		outline:none;
		background-color: #d9534f !important;
		border-color: #a90f0b !important
	}
	.hide{
		display:none;
	}
	
	.fadeInAndOut {
		-webkit-animation: fadeinout 4s linear forwards; 
		-moz-animation: fadeinout 4s linear forwards; 
		-ms-animation: fadeinout 4s linear forwards; 
		-o-animation: fadeinout 4s linear forwards;
		animation: fadeinout 3s linear forwards;
		
	}

	@-webkit-keyframes fadeinout {
	  0%,100% { opacity: 0; }
	  50% { opacity: 1; }
	}
	
	@-moz-keyframes fadeinout {
	  0%,100% { opacity: 0; }
	  50% { opacity: 1; }
	}
	
	@-ms-keyframes fadeinout {
	  0%,100% { opacity: 0; }
	  50% { opacity: 1; }
	}

	@-o-keyframes fadeinout {
	  0%,100% { opacity: 0; }
	  50% { opacity: 1; }
	}

	@keyframes fadeinout {
	  0%,100% { opacity: 0; }
	  50% { opacity: 1; }
	}
	


</style>
<script data-main="js/config" src="js/bower_components/requirejs/require.js"></script>
<div class="ui-container ng-cloak" ng-controller="QuizController">

	<!--Top Bar-->
	<div class="ui-wrapper" id="TopBar" >
		<div class="ui-sidebar"></div>
		<div class="ui-top">
			<div class="progress hide" ng-class="{hide:Loading}">
				<div class="progress-bar  progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{QuizProgress}}%;">
					<span class="sr-only">{{QuizProgress}}% Complete</span>
				</div>
			</div>
		</div>
		<div class="ui-sidebar"></div>
	</div>

	<!--Preloader-->
	<div class="ui-wrapper fadeInAndOut" id="LoadingScreen" ng-class="{hide:!Loading}">
		<div class="ui-sidebar ui-left">
			
		</div>
		<div class="ui-main">
			<div class="ui-content">
				<h2 class="text-center">One moment please</h2>
				<!--Fake preloading-->
				<p>
					Loading content.<img src="/travellersplate/img/preloader.gif" style="width:30px;height:22px;">
				</p>
			</div>
		</div>
		<div class="ui-sidebar ui-right">
			
		</div>
	</div>
	<!-- Main-->
	<div class="ui-wrapper hide" id="MainScreen" ng-class="{hide:Loading}">
		<div class="ui-sidebar ui-left">
			<button type="button" class="btn btn-default btn-lg" ng-click="navigate('prev')" ng-disabled="CurrentIndex == 0">
				&nbsp;<span class="glyphicon glyphicon-chevron-left"></span> &nbsp;
			</button>
		</div>
		<div class="ui-main" ng-repeat="(k,d) in questionnaire" ng-show="k == CurrentIndex">
				<div class="ui-content">
					<div id="qa-content">
						<p id="question">
							{{d.question.content}}
						</p>
					</div>
				</div>
				<div class="ui-content">
					<!-- Use ng-repeat for Options-->
					<div id="options" class="list-group">
						<button type="button" class="list-group-item" ng-repeat="(option_key,option) in d.question.options" ng-click="selected(d.question.id,option_key)" ng-class="(responses[CurrentIndex] == option_key)?'active':''">
							{{option}}
						</button>
					</div>
				</div>
		</div>
		<div class="ui-sidebar ui-right">
			<a type="button" class="btn btn-default btn-lg" ng-click="navigate('next')" ng-disabled="NoOptionSelected">
				&nbsp;<span class="glyphicon glyphicon-chevron-right" ></span> &nbsp;
			</a>
		</div>
	</div>
	<form action="api/process.php" method="POST" id="ProcessForm">
		<input type="hidden" name="questions" value="{{questions}}"/>
		<input type="hidden" name="responses" value="{{responses}}"/>
	</form>
</div>

