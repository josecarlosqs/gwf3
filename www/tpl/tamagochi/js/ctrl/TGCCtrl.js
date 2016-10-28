'use strict';
var TGC = angular.module('tgc');
TGC.controller('TGCCtrl', function($rootScope, $scope, $mdSidenav, PlayerSrvc, AvatarSrvc, ConstSrvc) {
	
	$scope.data = {
		
	};
	
	$scope.reset = function() {
		
	};

	$scope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams){
//		if (angular.isDefined(toState.data.pageTitle)) {
//			$scope.pageTitle = toState.data.pageTitle + ' | Angualar Material' ;
//		}
	});

	$scope.toggleLeftMenu = function() {
		$mdSidenav('left').toggle();
	};

	$scope.toggleRightMenu = function() {
		$mdSidenav('right').toggle();
	};
	
	
	$scope.logout = function() {
		
	};
	
	$rootScope.$on('tgc-own-player-loaded', function(event, player) {
		if (ConstSrvc.inLogin()) {
			console.log('TGCCtrl$on-tgc-own-player-loaded', player);
			ConstSrvc.inLogin(false);
			AvatarSrvc.initCache(player);
		}
	});

});
