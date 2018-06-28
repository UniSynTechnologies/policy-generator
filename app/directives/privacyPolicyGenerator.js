app.directive('privacyPolicyGenerator', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/privacyPolicyGenerator-template.php',
        controller: 'mainCtrl',
    };
    return directive;
});