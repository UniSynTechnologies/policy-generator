angular.module('policyGenerator').directive('policySummary', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/app/partials/policySummary-template.html',
    };
    return directive;
});
