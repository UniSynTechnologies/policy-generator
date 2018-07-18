angular.module('policyGenerator').directive('policyInitialInfo', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/partials/policyInitialInfo-template.html',
    };
    return directive;
});
