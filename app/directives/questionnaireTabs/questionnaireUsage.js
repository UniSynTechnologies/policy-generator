policyGenerator.directive('questionnaireUsage', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/questionnaireTabs/questionnaireUsage-template.html',
    };
    return directive;
});
