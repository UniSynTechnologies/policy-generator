policyGenerator.directive('questionnaireStorage', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl + '/app/partials/questionnaireTabs/questionnaireStorage-template.html',
    };
    return directive;
});
