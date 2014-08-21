<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>AngularJS + Laravel Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- endbuild -->
  </head>
  <body ng-app="angularLoginApp">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a ng-href="#">Anasayfa</a></li>
          <li ng-hide="$root.girisDurum"><a ng-href="#/login">Login</a></li>
          <li ng-show="$root.girisDurum"><a ng-href="#/profil">Profil</a></li>
          <li ng-show="$root.admin"><a ng-href="#/admin">Admin</a></li>
          <li ng-show="$root.girisDurum"><a ng-href="/api/logout"><i class="glyphicon glyphicon-log-out"></i></a></li>
        </ul>
        <h3 class="text-muted">Angular Laravel Login</h3>
      </div>

      <div ng-view=""></div>

      <div class="footer">
        <p><span class="glyphicon glyphicon-heart"></span> Ne Güzel Şey Şu Yeoman</p>
      </div>
    </div>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    <!-- build:js(.) scripts/oldieshim.js -->
    <!--[if lt IE 9]>
    <script src="bower_components/es5-shim/es5-shim.js"></script>
    <script src="bower_components/json3/lib/json3.min.js"></script>
    <![endif]-->
    <!-- endbuild -->

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/json3/lib/json3.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/angular-resource/angular-resource.js"></script>
    <script src="bower_components/angular-cookies/angular-cookies.js"></script>
    <script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="bower_components/angular-animate/angular-animate.js"></script>
    <script src="bower_components/angular-touch/angular-touch.js"></script>
    <script src="bower_components/angular-route/angular-route.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

        <!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="scripts/app.js"></script>
        <script>
        angular.module("angularLoginApp").constant("CSRF_TOKEN", '[[ csrf_token() ]]'); 
        </script>
        <script src="scripts/models.js"></script>
        <script src="scripts/controllers/anasayfa.js"></script>
        <script src="scripts/controllers/login.js"></script>
        <script src="scripts/controllers/profil.js"></script>
        <script src="scripts/controllers/admin.js"></script>
        <!-- endbuild -->
</body>
</html>
