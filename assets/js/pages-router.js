angular.module('scratchApp',['ngRoute'  ])
    .config(function($routeProvider, $locationProvider){
        $routeProvider
            .when('/',
                {
                    templateUrl: 'pages/welcome.html'
                })
            .when('/new', {
                templateUrl: 'pages/new-scratch.html'
            })
            .when('/table-view', {
                templateUrl: 'pages/table-view.html'
            })
            .when('/card-view', {
                templateUrl: 'pages/card-view.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    });