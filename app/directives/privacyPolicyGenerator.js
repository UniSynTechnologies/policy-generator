app.directive('privacyPolicyGenerator', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/privacyPolicyGenerator-template.html',
        controller: 'mainCtrl',
    };
    return directive;
});
