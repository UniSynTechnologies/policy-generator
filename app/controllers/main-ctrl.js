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

    $scope.questionnaireContents = [
        {
            header: "Data Tracking and Storing",
            subheader: "Typically, your company will track and store user data such as:",
            content: [
                {
                    title: "Account Information",
                    description: function() {
                        return "Your name and email address you provide during account  creation, " +
                                 "and your payment info, company name, and physical address when you  convert to a paid account."
                    },
                },
                {
                    title: "Application data",
                    description: function() {
                        return "Any data that you add to any " + $scope.newPolicy.companyName + " application  " +
                                 "(such as products, order information, comments, etc.) is stored in our systems.  " +
                                 "Additionally, when you use our application, we store some usage analytics to  monitor performance."
                    },
                },
                {
                    title: "Usage data",
                    description: function() {
                        return "We collect information about the devices you use to access our  services. " +
                               "This includes things like product version, and identifiers of your devices."
                    },
                },
                {
                    title: "Cookies and other technologies",
                    description: function() {
                        return "We use “cookies” on " + $scope.newPolicy.companyWebsite + ", " +
                               "its  subdomains and it’s affiliated sites. " +
                               "A cookie is a piece of data stored on a site  visitor's hard drive, " +
                               "to help us improve your access to our site and identify repeat  visitors to our site. " +
                               "For instance, when we use a cookie to identify you, " +
                               "you would  not have to login and provide a password more than once, thereby saving time  while on our site. " +
                               "Cookies can also enable us to track and target the interests of  our users to enhance the experience on our site. " +
                               "Usage of a cookie is in no way  linked to any personally identifiable information on our site.";
                    }
                },
            ],
            question: "Do you track any other forms of user data?",
            answer: "false",
            answerDescription: "",
        },
        {
            title: "",
            content: "",
            answer: false,
            answerDescription: "",
        },
        {
            title: "",
            content: "",
            answer: false,
            answerDescription: "",
        },
        {
            title: "",
            content: "",
            answer: false,
            answerDescription: "",
        },
        {
            title: "",
            content: "",
            answer: false,
            answerDescription: "",
        },
    ]

    $scope.currentQuestion = 0;

    $scope.totalQuestions = Object.keys($scope.questionnaireContents).length;

    $scope.startNewPolicy = function() {
        $scope.newPolicy.addingInfo = true;
    }
    $scope.showQuestionnaire = function() {
        if ($scope.newPolicy.addingInfo) {
            $scope.newPolicy.addingInfo = false;
            $scope.newPolicy.questionaire = true;
        }
    }

    $scope.goToNextQuestion = function() {
        $scope.currentQuestion += 1;
    }

    $scope.goToLastQuestion = function() {
        if ($scope.currentQuestion == 0) {
            $scope.newPolicy.addingInfo = true;
            $scope.newPolicy.questionaire = false;
        }
        else {
            $scope.currentQuestion -= 1;
        }
    }
}]);