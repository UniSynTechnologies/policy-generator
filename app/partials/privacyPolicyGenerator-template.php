<div class="mainContainer" ng-controller='mainCtrl'>
    <header class="md-horizontal-padding"
            layout="row"
            layout-align="space-between center">
        <img src="\app\assets\images\unisynLogoSmall.png" class="md-padding" height="120px" width="120px">
        <md-button class="md-primary">More Tools</md-button>
    </header>
    <md-divider></md-divider>
    <div class="bannerContainer" layout="column" layout-gt-sm="row" layout-align="space-around center">
        <md-content class="md-block md-padding md-margin bannerContent">
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
        <policy-initial-info></policy-initial-info>
        <policy-questionnaire></policy-questionnaire>
    </div>
</div>
