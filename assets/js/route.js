(function(){
    var app = angular.module('route', ['ngRoute']);
    
    app.config(function($routeProvider){
       $routeProvider.when('/', { template: 'register'}).when('/login', {templateUrl: 'login.php'}).otherwise({ redirectTo: '/'});
        
    });
    
})();