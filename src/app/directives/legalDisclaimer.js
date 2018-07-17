angular.module('policyGenerator').directive('legalDisclaimer', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/app/partials/legalDisclaimer-template.html',
    };
    return directive;
});
