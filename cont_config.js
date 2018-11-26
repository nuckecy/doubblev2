// Code goes here
(function() {

      var app = angular.module("MainConfig");
      var metactrl = function($scope) {

      ////////////// BASE URLS //////////////
      $scope.baseurl = "https://sterlingbankng.com/projects/doubble2/";
      $scope.homepath = "main";
      $scope.tcpath = "terms";
      $scope.applink = "https://apply.doubble.ng/";
      $scope.social_tw = "";
      $scope.social_fb = "";
      $scope.social_in = "";

      ////////////// META TAGS //////////////
      $scope.title = "Doubble | Stop Waiting Start Investing. Get back up to 200% with Doubble.";
      $scope.description = "Doubble is an automated investment platform that allows you invest at your convenience and get back up to 200% over a period.";
      $scope.keywords = "200% Interest, Earn Double, cashflow, savings, doubble 3, double 3, doubble 5, double 5, doubble 10, double 10, Personal Banking, Savings Account, Current Account, make investment";

      };
        
    app.controller('metactrl',metactrl);

}());
