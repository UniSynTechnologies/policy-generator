app.controller('mainCtrl', ['$scope', '$mdDialog', function($scope, $mdDialog){
    $scope.newPolicy = {
        addingInfo: false,
        questionaire: false,
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
            answerDescription: "",
        },
        usage: {
            answer: false,
            answerDescription: "",
        },
        sharing: {
            answer: false,
            answerDescription: "",
        },
    }

    $scope.startNewPolicy = function() {
        $scope.newPolicy.addingInfo = true;
    }

    $scope.showQuestionnaire = function() {
        if ($scope.newPolicy.addingInfo) {
            $scope.newPolicy.addingInfo = false;
            $scope.newPolicy.questionaire = true;
        }
    }

    $scope.backToInitialInfo = function() {
        if ($scope.newPolicy.questionaire) {
            $scope.newPolicy.questionaire = false;
            $scope.newPolicy.addingInfo = true;
        }
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