policyGenerator.directive('privacyPolicyGenerator', function() {
    var directive = {
        restrict: 'E',
        templateUrl: policyGenerator.constants.appUrl +
        '/app/partials/privacyPolicyGenerator-template.html',
        controller: 'mainCtrl',
    };
    return directive;
});
