(function(window, document, undefined) {
	'use strict';
	angular.module('ular.greyGoose.Validator', [])
	.provider('$validator', function () {
		var defaults = this.defaults = {
			indicators: false,
			controlNav: false,
			templateUrl: 'template/slider.html',
			interval: 3000,
			animationTransition: 400,
			responsive: true,
			breakpoints: { xs: 1, mobile: 2, tablet: 2, desktop: 3 },
			slides: [],
			autoPlay: false,
			pauseOnHover: true,
		};
		this.$get = ['$window', '$rootScope', '$timeout', function($window, $rootScope, $timeout){
			
		}];
	}).directive('validate', ['$validator', function($validator){
		return {
			restrict : 'A',
			scope: true,
			link: function(scope, element, attr) {
				console.log(attr.validate);
			}
		};
	}]);
	angular.module('ular.greyGoose', [ 'ular.greyGoose.Validator' ]);
})(window, document);