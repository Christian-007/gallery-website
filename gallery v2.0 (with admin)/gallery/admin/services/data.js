angular
	.module('myApp')
	.factory('Images', ['$http', function($http) {
		return {
			get: function() {
				return $http.get('api/data.json').then(function(response) {
					return response.data;
				});
			}
		};
	}]);