<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unisyn Privacy Policy Generator</title>
        <link rel="shortcut icon" type="image/x-icon" href="/app/assets/images/icons/unisynFavicon.png">
        <link href="/app/modules/angular-material/1.1.5/angular-material.min.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/app/css/app.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-animate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-aria.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-messages.min.js"></script>
        <!-- https://github.com/a8m/angular-filter -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.16/angular-filter.js"></script>
        <script src="/app/modules/angular-material/1.1.5/angular-material.min.js"></script>
        <!-- Modules -->
        <script src="/app/app.js"></script>
        <!-- Controllers -->
        <script src="/app/controllers/main-ctrl.js"></script>
        <!-- Directives -->
        <script src="/app/directives/privacyPolicyGenerator.js"></script>
        <script src="/app/directives/policyInitialInfo.js"></script>
        <script src="/app/directives/policyQuestionnaire.js"></script>
        <script src="/app/directives/questionnaireTabs/questionnaireStorage.js"></script>
        <script src="/app/directives/questionnaireTabs/questionnaireUsage.js"></script>
        <script src="/app/directives/questionnaireTabs/questionnaireSharing.js"></script>
    </head>
    <body ng-app="app" ng-cloak>
        <privacy-policy-generator></privacy-policy-generator>
    </body>
</html>
