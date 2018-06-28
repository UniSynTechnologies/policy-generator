app.directive('questionnaireUsage', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/questionnaireTabs/questionnaireUsage-template.php',
        controller: 'policyQuestionnaire',
    };
    return directive;
});