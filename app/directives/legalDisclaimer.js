policyGenerator.directive('legalDisclaimer', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/legalDisclaimer-template.html',
    };
    return directive;
});
