var myApp = angular.module('myApp', []);
	
myApp.controller('homeCtrl', ['$scope', 'Images', function($scope, Images){
	$scope.title = "Active Images on Slider";
	$scope.items = ['home', 'about', 'contact'];
	$scope.images = Images.get().then(function(data) {
		$scope.images = data;
	});
	//$scope.category = "landscape";
	$scope.isCategory = function(images, inputCategory) {
		console.log('images category: ' + images.category);
		//console.log('filter category: ' + inputCategory);
	    //return images.category === $category;
	};
	$scope.save = function() {
		alert(JSON.stringify($scope.images));
	};
}]);