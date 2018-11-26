(function(){

    var app = angular.module("MainConfig", ["ngRoute"]);

    app.config(function($routeProvider, $locationProvider){
            
            $routeProvider
            .when("/", {
                templateUrl: "main.html",
                controller: "MainController"
            })
            .when("/main", {
                templateUrl: "main.html",
                controller: "MainController"
            })
            .when("/terms", {
                templateUrl: "terms.html",
                controller: "MainController"
            })
            .otherwise({redirectTo:"/main"});
            
            $locationProvider.html5Mode(true); 
            
    });


    app.directive('commaseparator', function($filter) {
        'use strict';
        return {
            require: 'ngModel',
            link: function(scope, elem, attrs, ctrl) {
                if (!ctrl) {
                    return;
                }
                ctrl.$formatters.unshift(function() {
                    return $filter('number')(ctrl.$modelValue);
                });
                ctrl.$parsers.unshift(function(viewValue) {
                    var plainNumber = viewValue.replace(/[\,\.\-\+]/g, ''),
                        b = $filter('number')(plainNumber);
                    elem.val(b);
                    return plainNumber;
                });
            }
        };
    });

}());
