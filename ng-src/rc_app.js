// Code goes here
var app = angular.module('myContainer', []);
app.controller('RetCulator', function($scope) {

  function precise_round(num, dec) {
    if ((typeof num !== 'number') || (typeof dec !== 'number'))
    return false;
    var num_sign = num >= 0 ? 1 : -1;
    return (Math.round((num * Math.pow(10, dec)) + (num_sign * 0.0001)) / Math.pow(10, dec)).toFixed(dec);
  }

  //Constants
  $scope.mode_option = [{
    "name": "Select an Option",
    "id": ""
  }, {
    "name": "End of Month",
    "id": "1"
  }, {
    "name": "Beginning of Month",
    "id": "2"
  }];
  $scope.current_mode = 1;

  $scope.freq_option = [{
    "name": "Select an Option",
    "id": ""
  }, {
    "name": "Monthly",
    "id": "12"
  }, {
    "name": "Quaterly",
    "id": "4"
  }, {
    "name": "Bi-annually",
    "id": "2"

  }, {
    "name": "Yearly",
    "id": "1"
  }];
  $scope.current_freq = 12;
  $scope.intRate = 6 / 100;
  $scope.exAmt = 6500000;
  $scope.hundred = 1;

  //Date Selectors
  //Date Difference
  $scope.formatString = function(format) {
    var pieces = format.split('.'),
      year = parseInt(pieces[0]),
      month = parseInt(pieces[1]),
      day = parseInt(pieces[2]),
      date = new Date(year, month - 1, day);
    return date;
  };

  //Date Difference
  function dayDiff(fromdate, todate) {
    var date2 = new Date($scope.formatString(fromdate));
    var date1 = new Date($scope.formatString(todate));
    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    return diffDays;
  }

  //TDefault Future Date
  function dfDate() {
    var today = new Date();
    var dd = today.getDate() - 19;
    var mm = today.getMonth() + 2;
    var yy = today.getFullYear() + 3;
    if (dd < 10) {
      dd = '0' + dd;
    }
    if (mm < 10) {
      mm = '0' + mm;
    }
    return yy + '.' + mm + '.' + dd;
  }

  //Today's Date
  function todayFDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yy = today.getFullYear();
    if (dd < 10) {
      dd = '0' + dd;
    }
    if (mm < 10) {
      mm = '0' + mm;
    }
    return yy + '.' + mm + '.' + dd;
  }
  
  //Currency Formatter
    var formatter = new Intl.NumberFormat('en-NG', {
        style: 'currency',
        currency: 'NGN',
        minimumFractionDigits: 2
    });

  $scope.futureDate = dfDate();
  $scope.fromDate = todayFDate();


  //Calculate Retirement
  $scope.calret = function() {

    //Effective Rate 
    $scope.effRate = (($scope.intRate * 0.9) / ($scope.current_freq));

    //Date Difference
    $scope.dateDiff = (dayDiff($scope.fromDate, $scope.futureDate) * 0.002738);

    //Number of Periods
    $scope.noPeriod = Math.round($scope.dateDiff);

    $scope.xValue = ($scope.effRate);
    $scope.yValue = (Math.round($scope.dateDiff)) * $scope.current_freq;
    $scope.ziValue = (1 + $scope.xValue);
    $scope.zValue = Math.pow($scope.ziValue, $scope.yValue);
    $scope.aValue = (($scope.zValue - 1) / $scope.xValue);

    if ($scope.current_mode == 1) {
      $scope.finalVal = ($scope.exAmt / $scope.aValue).toFixed(2);
    } else if ($scope.current_mode == 2) {
      var eOm = 1 + $scope.xValue;
      $scope.finalVal = formatter.format((($scope.exAmt / ($scope.aValue * eOm))));
    }

    $scope.intearn = ($scope.exAmt - ($scope.finalVal * $scope.yValue)).toFixed(2);
    $scope.totaldp = ($scope.finalVal * $scope.yValue).toFixed(2);
  };

  $scope.calret();

});