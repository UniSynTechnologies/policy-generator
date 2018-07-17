angular.module('policyGenerator').directive('generatedPolicy', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/app/partials/generatedPolicy-template.html',
    };
    return directive;
});
