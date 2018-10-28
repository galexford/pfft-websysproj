var appConfig = angular.module('appConfig', []);

var bookDaddy  = angular.module("bookDaddyApp", ["ngRoute", "appConfig", "angularCSS"]);

bookDaddy.config(function($routeProvider,$locationProvider) {
    $routeProvider

    // FRONT CTRL SECTION
    .when("/", {
        controller: "homeCtrl",
        templateUrl: 'views/home.html'
    })

    .when("/", {
        controller: "addListingCtrl",
        templateUrl: 'views/addListing.html'
    })

    // ERROR CTRL SECTION
        .when("/404", {
            templateUrl: 'views/errors/404.html'
        })
        .otherwise({
            redirectTo: '/404'
        });
    $locationProvider.hashPrefix('');
});