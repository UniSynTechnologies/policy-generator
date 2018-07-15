policyGenerator.directive('questionnaireSharing', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl + 'app/partials/questionnaireTabs/questionnaireSharing-template.html',
    };
    return directive;
});
