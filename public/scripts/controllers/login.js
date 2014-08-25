'use strict';

angular.module('angularLoginApp')
    .controller('LoginCtrl', function($scope, $rootScope, login, CSRF_TOKEN, $location) {

        $scope.login = function() {
            $scope.veri = {
                kullanici: $scope.kullanici,
                password: $scope.sifre,
                _token: CSRF_TOKEN
            }

            login.login($scope.veri, function(data) {
                if (data) {
                    $rootScope.girisDurum = true;
                    $rootScope.uye = data;
                    $location.path('/');
                } else {
                    alert("Giriş Yapılamadı");
                }
            });
        }

    });

