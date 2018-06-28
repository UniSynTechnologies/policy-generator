app.directive('questionnaireSharing', function() {
    var directive = {
        restrict: 'E',
        templateUrl: '/app/partials/questionnaireTabs/questionnaireSharing-template.php',
        controller: 'mainCtrl',
    };
    return directive;
});
