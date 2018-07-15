policyGenerator.directive('policySummary', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/policySummary-template.html',
    };
    return directive;
});
