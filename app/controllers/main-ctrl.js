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

    $scope.formatPhoneNumber = function(s) {
        var s2 = (""+s).replace(/\D/g, '');
        var m = s2.match(/^(\d{3})(\d{3})(\d{4})$/);
        return (!m) ? s : "(" + m[1] + ") " + m[2] + "-" + m[3];
    }

    $scope.printElem = function(elem) {
        var targetElement = document.getElementById(elem).innerHTML;
        var style = "<style>" +
                        "body {font-family: 'Roboto', sans-serif;}" +
                    "</style>";
        var script = "<script>" +
                        "$('.md-display-2').css('font-size', '4.5rem');" +
                        "$('.md-headline').css('font-size', '2.4rem');" +
                        "$('.md-title').css('font-size', '2rem');" +
                        "$('.textIndent').css('text-indent', '2em');" +
                        "if ($('#miscDataList').children().length == 0) {" +
                            "$('#miscData').remove();" +
                        "}" +
                        "if ($('#miscSharingList').children().length == 0) {" +
                            "$('#miscSharing').remove();" +
                        "}" +
                     "</script>";
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('<html><head><title>' +
                                $scope.newPolicy.companyName +
                                ' Privacy Policy' +
                                '</title>');
        mywindow.document.write("" +
        "<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet'>" +
        "");
        mywindow.document.write("" +
        "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>" +
        "");
        mywindow.document.write(style);
        mywindow.document.write("</head><body ng-app='app' ng-cloak>");
        mywindow.document.write("<div ng-controller='mainCtrl'>");
        mywindow.document.write(targetElement);
        mywindow.document.write(script);
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