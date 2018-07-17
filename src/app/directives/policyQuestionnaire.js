angular.module('policyGenerator').directive('policyQuestionnaire', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/app/partials/policyQuestionnaire-template.html',
    };
    return directive;
});
