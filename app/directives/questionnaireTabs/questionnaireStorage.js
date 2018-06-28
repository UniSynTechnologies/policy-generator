app.directive('questionnaireStorage', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/questionnaireTabs/questionnaireStorage-template.php',
        controller: 'policyQuestionnaire',
    };
    return directive;
});