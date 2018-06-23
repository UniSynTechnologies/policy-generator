<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Unisyn Privacy Policy Generator</title>
    <link rel="shortcut icon" type="image/x-icon" href="/app/assets/images/icons/unisynFavicon.png">
    <link href="/app/modules/angular-material/1.1.5/angular-material.min.css" type="text/css" rel="stylesheet">
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
    <script src="/app/modules/unisynFooter/unisynFooter.js"></script>
  </head>
  <body ng-app="app" ng-cloak>
    <div class="mainContainer" ng-controller='mainCtrl'>
        <header class="md-horizontal-padding"
                layout="row"
                layout-align="space-between center">
            <img src="\app\assets\images\unisynLogoSmall.png" class="md-padding" height="120px" width="120px">
            <md-button class="md-primary">More Tools</md-button>
        </header>
        <md-divider></md-divider>
            <md-content class="md-block md-padding md-margin mainBanner"
                        layout="column"
                        layout-align="space-around center">
                <label class="md-display-3">Privacy Policy Generator</label>
                <div ng-hide="newPolicy.questionaire">
                    <p>Let us do the hard work for you! With our free <strong>Privacy Policy Generator</strong>,
                    <br>
                    you can have a custom policy on your desk in as little as <strong>Five Minutes</strong>!
                    </p>
                </div>
                <md-button class="md-primary md-raised" ng-click="startNewPolicy()" ng-hide="newPolicy.addingInfo || newPolicy.questionaire">Let's Get Started</md-button>
            </md-content>
        </div>
        <div layout="column" layout-align="center center">
            <md-content class="md-block md-padding md-vertical-margin privacyPolicyGeneratorContainer infoForm infoFormHide">
                <form name="infoForm" ng-submit="test()">
                    <md-toolbar class="md-primary">
                        <div class="md-toolbar-tools" style="text-align: center;">
                            <label class="md-headline" flex>Just Some Basic Info...</label>
                        </div>
                    </md-toolbar>
                    <div layout="column" layout-gt-sm="row">
                        <md-input-container flex="50">
                            <label>Company Name</label>
                            <input ng-model="newPolicy.companyName" name="companyName"  ng-required="true">
                        </md-input-container>
                        <md-input-container flex="50">
                            <label>Email Address</label>
                            <input ng-model="newPolicy.email" name="email"  ng-required="true">
                        </md-input-container>
                    </div>
                    <md-input-container class="md-block">
                        <label>Address</label>
                        <input ng-model="newPolicy.companyAddress.street" name="companyAddressStreet"  ng-required="true">
                    </md-input-container>
                    <div layout="column" layout-gt-sm="row">
                        <md-input-container flex="30">
                            <label>City</label>
                            <input ng-model="newPolicy.companyAddress.city" name="companyAddressCity"  ng-required="true">
                        </md-input-container>
                        <md-input-container flex="20">
                            <label>State/Province</label>
                            <input ng-model="newPolicy.companyAddress.state" name="companyAddressState"  ng-required="true">
                        </md-input-container>
                    </div>
                    <div layout="column" layout-gt-sm="row">
                            <md-input-container flex="50">
                            <label>Zip Code</label>
                            <input ng-model="newPolicy.companyAddress.zip" name="companyAddressZip"  ng-required="true">
                        </md-input-container>
                        <md-input-container flex="50">
                            <label>Country</label>
                            <input ng-model="newPolicy.companyAddress.country" name="companyAddressCountry"  ng-required="true">
                        </md-input-container>
                    </div>
                    <md-input-container class="md-block">
                        <label>Website Url</label>
                        <input ng-model="newPolicy.companyWebsite" name="companyWebsite"  ng-required="true">
                    </md-input-container>
                    <md-button type="submit" ng-click="test()" class="md-primary md-raised">Continue</md-button>
                </form>
            </md-content>
            <md-content class="md-block md-padding md-vertical-margin privacyPolicyGeneratorContainer"
                        ng-show="newPolicy.questionaire">
                <md-toolbar>
                    <div class="md-toolbar-tools" style="text-align: center;">
                        <label class="md-headline" flex>{{ questionnaireContents[ currentQuestion ].header }}</label>
                        {{ currentQuestion + 1 }}/{{ totalQuestions }}
                    </div>
                </md-toolbar>
                <br>
                <div class="md-title">{{ questionnaireContents[ currentQuestion ].subheader }}</div>
                <br>
                <div ng-repeat="content in questionnaireContents[ currentQuestion ].content">
                    <strong><em>"{{ content.title }}"</em></strong>
                    <br>
                    <div style="text-indent: 2em;">
                        {{ content.description() }}
                    </div>
                    <br>
                </div>
                <div class="md-title">{{ questionnaireContents[ currentQuestion ].question }}</div>
                <md-radio-group ng-model="questionnaireContents[ currentQuestion ].answer"
                                class="md-vertical-padding"
                                layout="row"
                                layout-align="space-around center">
                    <md-radio-button value="true">Yes</md-radio-button>
                    <md-radio-button value="false">No</md-radio-button>
                </md-radio-group>
                <div ng-show="questionnaireContents[ currentQuestion ].answer == 'true'">
                    <div class="md-title">Please provide a brief description</div>
                    <md-input-container class="md-block" flex>
                        <label>Description</label>
                        <textarea ng-model="questionnaireContents[ currentQuestion ].answerDescription"></textarea>
                    </md-input-container>
                </div>
                <md-button class="md-primary md-raised"
                           ng-disabled="questionnaireContents[ currentQuestion ].answer == 'true' &&
                                        questionnaireContents[ currentQuestion ].answerDescription == ''"
                           ng-click=goToNextQuestion()>
                    Next
                </md-button>
                <md-button class="md-secondary md-raised"
                           ng-click=goToLastQuestion()>
                    Back
                </md-button>
            </md-content>
        </div>
    </div>
  </body>
</html>