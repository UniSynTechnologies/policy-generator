app.controller('mainCtrl', ['$scope', '$mdDialog', '$mdToast', function($scope, $mdDialog, $mdToast){
    $scope.newPolicy = {
        untouched: true,
        addingInfo: false,
        questionnaire: false,
        finished: false,
        selectedTab: 0,
        companyName: "",
        companyPhoneNumber: "",
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

    $scope.wwwRemover = function(websiteURL) {
        var result = websiteURL.replace('www.', '');
        return result;
    }

    $scope.printElem = function(elem) {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write("</head><body ng-app='app' ng-cloak>");
        mywindow.document.write("<div ng-controller='mainCtrl'>");
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write("</div>");
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/
        mywindow.print();
        mywindow.close();

        $mdToast.show(
            $mdToast.simple()
            .textContent('Sent to Printer!')
            .position('top right')
            .hideDelay(3000)
        );
    }
}]);