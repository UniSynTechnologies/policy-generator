app.directive('policyInitialInfo', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/policyInitialInfo-template.html',
        controller: 'policyInitialInfo',
    };
    return directive;
});

app.controller('policyInitialInfo', ['$scope', function($scope) {

}]);