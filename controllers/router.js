var appConfig = angular.module('appConfig', []);

var bookDaddy  = angular.module("bookDaddyApp", ["ngRoute", "appConfig", "angularCSS"]);

bookDaddy.config(function($routeProvider,$locationProvider) {
    $routeProvider

    // FRONT CTRL SECTION
        .when("/", {
            controller: "homeCtrl",
            templateUrl: 'views/home.html'
        })
        .when("/AboutUs", {
            controller: 'aboutUsCtrl',
            templateUrl: 'views/aboutUs.html'
        })
        .when("/listings", {
            controller: 'listingsCtrl',
            templateUrl: 'views/listings.html'
        })
        .when("/login", {
            controller: 'loginCtrl',
            templateUrl: 'views/login.html'
        })
        .when("/signup", {
            controller: 'signupCtrl',
            templateUrl: 'views/signup.html'
        })
        .when("/addListing", {
            controller: 'addListingCtrl',
            templateUrl: 'views/addListing.php'
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