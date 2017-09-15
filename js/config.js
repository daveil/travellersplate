requirejs.config({
	urlArgs: (function(){ return 'v='+(new Date()).getTime()})(), // Dev purposes.
	waitSeconds: 120,
    paths: {
        'angular': 'bower_components/angular/angular.min',
        'app':'app',
        'quiz':'controllers/quiz_controller'
    }
});
requirejs(['app','quiz'],function(app){
	app.init();
});