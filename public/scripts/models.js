angular.module('models', [])
    .factory('login', function($http) {

        return {

            login: function(veri, callback) {


                $http({
                    method: 'POST',
                    url: '/api/login',
                    data: veri
                })
                    .success(function(data) {

                        callback(data);

                    })
                    .error(function() {

                        alert("Sunucu hatası...");

                    });
            },

            logout: function(callback) {


                $http({
                    method: 'GET',
                    url: '/api/yazi/' + id
                })
                    .success(function(data) {

                        callback(data);

                    })
                    .error(function() {

                        alert("Sunucu hatası...");

                    });
            }
        }
    }).factory('uye', function($http) {
        return {
            profil: function(callback) {
                $http({
                    method: 'GET',
                    url: '/api/uye/profil'
                })
                    .success(function(data) {

                        callback(data);

                    })
                    .error(function() {

                        alert("Sunucu hatası...");

                    });
            }
        }
    });
