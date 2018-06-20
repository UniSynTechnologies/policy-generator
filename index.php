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
        <header layout="row"
                layout-align="space-around center">
            <img src="\app\assets\images\unisynLogoSmall.png" class="md-padding" height="120px" width="120px">
            <label class="md-display-3">Private Policy Generator</label>
        </header>
        <md-divider></md-divider>
        <div class="initialInfoBG"layout="row" layout-align="center center">
            <md-content class="md-block md-padding initialInfoBG" style="width: 600px; max-width: 100%;">
                <label class="md-headline">Privacy Policy Made Simple.</label>
                <p>Let us do the hard work for you! With our free <strong>Private Policy Generator</strong>,
                <br>
                 you can have a custom policy in your inbox in as little as <strong>Five Minutes</strong>!
                </p>
            </md-content>
            <md-content class="md-block md-padding" style="width: 600px; max-width: 100%;">
                <form name="initialInfo" ng-submit="initialInfoFormSubmit()">
                    <md-toolbar class="md-primary">
                        <div class="md-toolbar-tools" style="text-align: center;">
                            <label class="md-headline" flex md-truncate>Just Some Basic Info...</label>
                        </div>
                    </md-toolbar>
                    <md-input-container style="width: 300px;">
                        <label>Company Name</label>
                        <input ng-model="newPolicy.companyName" name="companyName"  ng-required="true">
                    </md-input-container>
                    <md-input-container style="width: 200px;">
                        <label>Email Address</label>
                        <input ng-model="newPolicy.email" name="email"  ng-required="true">
                    </md-input-container>
                    <md-input-container class="md-block">
                        <label>Address</label>
                        <input ng-model="newPolicy.companyAddress.street" name="companyAddressStreet"  ng-required="true">
                    </md-input-container>
                    <md-input-container>
                        <label>City</label>
                        <input ng-model="newPolicy.companyAddress.city" name="companyAddressCity"  ng-required="true">
                    </md-input-container>
                    <md-input-container>
                        <label>State</label>
                        <input ng-model="newPolicy.companyAddress.state" name="companyAddressState"  ng-required="true">
                    </md-input-container>
                    <md-input-container>
                        <label>Zip Code</label>
                        <input ng-model="newPolicy.companyAddress.zip" name="companyAddressZip"  ng-required="true">
                    </md-input-container>
                    <md-button class="md-primary md-raised">Begin</md-button>
                </form>
            </md-content>
        </div>
    </div>
  </body>
</html>