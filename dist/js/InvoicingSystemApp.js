


var app = angular.module('InvoicingSystemApp', ['ngRoute', 'ngSanitize', 'ui.select','ui.bootstrap']);

//This configures the routes and associates each route with a view and a controller
app.config(function ($routeProvider) {
    $routeProvider
        .when('/',
        {
            controller: 'DashboardController',
            templateUrl: 'Views/Dashboard.html'
        })       
        .when('/invoice/:invoiceID',
        {
           // controller: 'invoiceController',
            controller: 'CommonController',
            templateUrl: '/Views/Invoice.html'
        })        
        .when('/invoice',
        {
            controller: 'CommonController',
            templateUrl: 'Views/Invoice.html'
        })
        .otherwise({ redirectTo: '/' });
});
app.filter('sumByColumn', function () {
    return function (collection, column) {
        var total = 0;

        collection.forEach(function (item) {
            total += parseInt(item[column]);
        });

        return total;
    };
})



