angular.module('policyGenerator').directive('questionnaireSharing', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl + '/src/app/partials/questionnaireTabs/questionnaireSharing-template.html',
    };
    return directive;
});
