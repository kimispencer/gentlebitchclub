var app = angular.module('app', []);

app.run(['$rootScope', '$http', function($rootScope, $http) {
	$rootScope.formSubmitted = false;
}]);
 
app.controller('MainCtrl', function() {

});

app.controller('FormCtrl', function($scope, $rootScope, $http) {
	$scope.signup = {};

	// process form
	$scope.processForm =function() {
		$http({
			method: 'POST',
			url: 'process.php',
			data: $scope.data,
	        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
		})
			.success(function(data) {
				// console.log(data);
				$rootScope.formSubmitted = true;
			})
			.error(function(data) {
				console.log('error');
			});
	};
});

/*
	directives
*/

// app.directive('onBlur', [function(){
// 	return {
// 		restrict: 'A',
// 		link: function(scope, elem, attrs) {
// 			elem.on('blur', function() {
// 				console.log('blur')
// 			});
// 		}
// 	}
// }]);

// var blur = function () {
//     return {
//         restrict: 'E',
//         require: '?ngModel',
//         link: function (scope, elm, attr, ctrl) {
//             if (!ctrl) {
//                 return;
//             }

//             elm.on('focus', function () {
//                 elm.addClass('has-focus');

//                 scope.$apply(function () {
//                     ctrl.hasFocus = true;
//                 });
//             });

//             elm.on('blur', function () {
//                 elm.removeClass('has-focus');
//                 elm.addClass('has-visited');

//                 scope.$apply(function () {
//                     ctrl.hasFocus = false;
//                     ctrl.hasVisited = true;
//                 });
//             });

//             elm.closest('form').on('submit', function () {
//                 elm.addClass('has-visited');

//                 scope.$apply(function () {
//                     ctrl.hasFocus = false;
//                     ctrl.hasVisited = true;
//                 });
//             });

//         }
//     };
// };

// app.directive('input', blur);
// app.directive('select', blur);