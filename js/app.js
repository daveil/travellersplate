define(['angular'],function () {
	var app = angular.module("TravellersPlate",[]); 
	
	app.init = function (modules) {
		console.log('app.init called');
		angular.bootstrap(document, ['TravellersPlate']);
	};
	
	return app;
});