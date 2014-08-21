'use strict';

/**
 * @ngdoc overview
 * @name angularLoginApp
 * @description
 * # angularLoginApp
 *
 * Main module of the application.
 */
angular
  .module('angularLoginApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'models'
  ])
.run(function($rootScope,uye,$location){
        
        $rootScope.$on('$routeChangeStart', function (event, next) {
          uye.profil(function(data){

          if(data==false){

            $rootScope.girisDurum = false;
            
          }else{

            $rootScope.girisDurum = data.yetki;
            $rootScope.uye = data;

            if($rootScope.girisDurum == 2){

              $rootScope.admin = true;

              }

          }
        });
            if ($rootScope.girisDurum == 0 && next.gizli) {
              $location.path('/login');
            }

            if (!$rootScope.admin && next.gizli == 2) {
                $location.path('/profil');
              }
        });
})
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/anasayfa.html',
        gizli: false
      })
      .when('/login', {
        templateUrl: 'views/login.html',
        controller: 'LoginCtrl',
        gizli: false
      })
      .when('/profil', {
        templateUrl: 'views/profil.html',
        gizli: true
      })
      .when('/admin', {
        templateUrl: 'views/admin.html',
        gizli: 2
      })
      .otherwise({
        redirectTo: '/'
      });
  });
