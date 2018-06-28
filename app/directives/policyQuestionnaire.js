app.directive('policyQuestionnaire', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/policyQuestionnaire-template.php',
        controller: 'mainCtrl',
    };
    return directive;
});