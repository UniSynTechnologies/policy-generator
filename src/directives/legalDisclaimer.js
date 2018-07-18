angular.module('policyGenerator').directive('legalDisclaimer', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/partials/legalDisclaimer-template.html',
    };
    return directive;
});
