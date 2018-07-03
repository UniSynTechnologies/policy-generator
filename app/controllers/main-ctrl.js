app.controller('mainCtrl', ['$scope', '$mdDialog', function($scope, $mdDialog){
    $scope.newPolicy = {
        untouched: true,
        addingInfo: false,
        questionnaire: false,
        finished: false,
        selectedTab: 0,
        companyName: "",
        email: "",
        companyAddress: {
            street: "",
            city: "",
            state: "",
            zip: "",
            country: "USA",
        },
        companyWebsite: "",
    }

    $scope.questionnaire = {
        storage: {
            answer: false,
            answerDescription: [],
        },
        usage: {
            answer: false,
            answerDescription: [],
        },
        sharing: {
            answer: false,
            answerDescription: [],
        },
    }

    $scope.startNewPolicy = function() {
        $scope.newPolicy.untouched = false;
        $scope.newPolicy.addingInfo = true;
    }

    $scope.showQuestionnaire = function() {
        $scope.newPolicy.addingInfo = false;
        $scope.newPolicy.questionnaire = true;
        $scope.newPolicy.finished = false;
    }

    $scope.backToInitialInfo = function() {
        $scope.newPolicy.addingInfo = true;
        $scope.newPolicy.questionnaire = false;
        $scope.newPolicy.finished = false;
    }

    $scope.showFinishedPolicy = function() {
        $scope.newPolicy.addingInfo = false,
        $scope.newPolicy.questionnaire = false,
        $scope.newPolicy.finished = true;
    }
    $scope.nextTab = function() {
        $scope.newPolicy.selectedTab += 1;
    }

    $scope.openLegitimateInterestDialog = function(event) {
        $mdDialog.show({
            contentElement: '#legitimateInterestDialogContainer',
            parent: angular.element(document.body),
            targetEvent: event,
            clickOutsideToClose: true
        });
    }

    $scope.cancelDialog = function() {
        $mdDialog.cancel();
    }
}]);