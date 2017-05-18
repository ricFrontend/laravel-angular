(function() {
	angular.module('mainCtrl', [])

		.controller('mainController', function($scope, $http, Comment, $firebaseObject) {

			var vm = this,
				rootRef = firebase.database().ref().child('posts');

			vm.objeto = $firebaseObject(rootRef);

			vm.postData = {
				favoriteGenres: ''
			};

			vm.submitPost = function() {

				Comment.save(vm.postData)
					.success(function(data) {
						vm.postData = {};
					})
					.error(function(data) {
						console.log(data);
					});
			};

		});
})();