app.controller('mainCtrl', ['$scope', function($scope){
    $scope.newPolicy = {
        addingInfo: false,
        questionaire: false,
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
            answer: "false",
            answerDescription: "",
        },
        usage: {
            answer: "false",
            answerDescription: "",
        },
        sharing: {
            answer: "false",
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
}]);
