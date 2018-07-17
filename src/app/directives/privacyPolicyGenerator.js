angular.module('policyGenerator').directive('privacyPolicyGenerator', function() {
    var directive = {
        restrict: 'E',
        templateUrl: angular.module('policyGenerator').constants.appUrl +
        '/src/app/partials/privacyPolicyGenerator-template.html',
        controller: 'mainCtrl',
    };
    return directive;
});
