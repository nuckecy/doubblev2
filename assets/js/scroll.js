// Code goes here
(function() {

      var app = angular.module("MainConfig");
      var AnchorScroller = function($scope,$location, $anchorScroll) {

        $scope.home = function(){
        $location.hash('home');
        $anchorScroll();
        };

        $scope.features = function(){
        $location.hash('features');
        $anchorScroll();
        };
        
        $scope.plans = function(){
        $location.hash('plans');
        $anchorScroll();
        };

        $scope.calc = function(){
        $location.hash('calc');
        $anchorScroll();
        };
        
        $scope.faq = function(){
        $location.hash('faq');
        $anchorScroll();
        };

        $scope.contact = function(){
        $location.hash('contact');
        $anchorScroll();
        };
      
      };
        
    app.controller('AnchorScroller',AnchorScroller);

}());
