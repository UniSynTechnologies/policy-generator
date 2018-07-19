policyGenerator.directive('policyQuestionnaire', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/policyQuestionnaire-template.html',
    };
    return directive;
});
