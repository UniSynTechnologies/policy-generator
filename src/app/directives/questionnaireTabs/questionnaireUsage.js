angular.module('policyGenerator').directive('questionnaireUsage', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/app/partials/questionnaireTabs/questionnaireUsage-template.html',
    };
    return directive;
});
