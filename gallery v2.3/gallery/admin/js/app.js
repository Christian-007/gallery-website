var myApp = angular.module('myApp', []);
	
myApp.controller('homeCtrl', ['$scope', 'Images', function($scope, Images){
	$scope.title = "Active Images on Slider";
	$scope.items = ['home', 'about', 'contact'];
	$scope.images = Images.get().then(function(data) {
		$scope.images = data;
	});
	$scope.names = []; 
	$scope.selectStatus = "false";

	$scope.changeStatus = function(status){
		$scope.selectStatus = status;
		if($scope.selectStatus == "false"){
			$scope.names = []; 
		}
		console.log("$scope.selectStatus: " + $scope.selectStatus);
	};

	$scope.addSelection = function(item){
		var index = $scope.names.indexOf(item);
		if($scope.selectStatus == "true"){
			if(index == -1){
				$scope.names.push(item); 
			}else{
				$scope.names.splice(index, 1);
			}
		}
		console.log($scope.names);
	};
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