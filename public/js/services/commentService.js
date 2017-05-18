(function() {
	angular
		.module('commentService', [])
		.factory('Comment', function($http) {

			return {
				get : function() {
					return $http.get('posts');
				},
				show : function(id) {
					return $http.get('posts/' + id);
				},
				save : function(commentData) {
					return $http({
						method: 'POST',
						url: 'posts',
						headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
						data: $.param(commentData)
					});
				}
			}

		});	
})();
