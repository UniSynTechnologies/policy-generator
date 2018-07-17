angular.module('policyGenerator').directive('questionnaireStorage', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl + '/src/app/partials/questionnaireTabs/questionnaireStorage-template.html',
    };
    return directive;
});
