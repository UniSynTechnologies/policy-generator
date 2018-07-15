policyGenerator.directive('policyInitialInfo', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/policyInitialInfo-template.html',
    };
    return directive;
});
