app.controller('mainCtrl', ['$scope', '$mdDialog', '$mdToast', function($scope, $mdDialog, $mdToast){
    $scope.newPolicy = {
        untouched: true,
        addingInfo: false,
        disclaimer: false,
        questionnaire: false,
        finished: false,
        printing: false,
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
        companyEmail: "",
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

    $scope.showLegalDisclaimer = function() {
        $scope.newPolicy.disclaimer = true;
    }

    $scope.closeLegalDisclaimer = function() {
        $scope.newPolicy.disclaimer = false;
    }

    $scope.showQuestionnaire = function() {
        $scope.newPolicy.addingInfo = false;
        $scope.newPolicy.questionnaire = true;
        $scope.newPolicy.finished = false;
    }

    $scope.nextTab = function() {
        $scope.newPolicy.selectedTab += 1;
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

    $scope.printGeneratedPolicy = function() {
        $scope.newPolicy.printing = true;
        window.print();
        $scope.newPolicy.printing = false;
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

    function formatPhoneNumber(s) {
        var s2 = (""+s).replace(/\D/g, '');
        var m = s2.match(/^(\d{3})(\d{3})(\d{4})$/);
        return (!m) ? s : "(" + m[1] + ") " + m[2] + "-" + m[3];
    }

    $scope.printElem = function(elem) {
    // Initialize variables //
        var html = "";
        var head = "";
        var body = "";
        var title = "<title>" + $scope.newPolicy.companyName + " Privacy Policy</title>";
        var angularMaterialCss = '<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">';
        var targetElement = document.getElementById(elem).innerHTML;

    // Contruct the document //

        html += "<html>";

        // Head //
            head += "<head>";
            head += title;
            head += angularMaterialCss;
            head += "</head>";

        html += head;

        // Body //
            body += "<body>";
            body += targetElement;
            body += "</body>";

        html += body;
        html += "</html>";

    // Open a New Tab and Print the Contents of this Document //
        var newWindow = window.open('', 'PRINT');
        newWindow.document.write(html);
        newWindow.document.close();
        newWindow.onload = function() {
            newWindow.print();
            newWindow.close();
        };

    // Display Success Toast //
        $mdToast.show(
            $mdToast.simple()
            .textContent('Sent to Printer!')
            .position('top right')
            .hideDelay(3000)
        );
    }
}]);