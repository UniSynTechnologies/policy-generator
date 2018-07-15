policyGenerator.directive('generatedPolicy', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/generatedPolicy-template.html',
    };
    return directive;
});
