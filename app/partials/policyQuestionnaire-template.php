<md-content class="md-block md-padding md-vertical-margin privacyPolicyGeneratorContainer"                          ng-show="newPolicy.questionaire">
    <md-tabs md-dynamic-height="true">
        <md-tab label="Data Storage">
            <questionnaire-storage></questionnaire-storage>
        </md-tab>
        <md-tab label="Data Usage">
            <questionnaire-usage></questionnaire-usage>
        </md-tab>
        <md-tab label="Data Sharing">
            <questionnaire-sharing></questionnaire-sharing>
        </md-tab>
    </md-tabs>
    <md-button class="md-primary md-raised"
               ng-disabled="(storage.answer == 'true' && storage.answerDescription == '') ||
                            (usage.answerDescription == 'true' && usage.answerDescription == '') ||
                            (sharing.answerDescription == 'true' && sharing.answerDescription == '')">
        Generate Policy
    </md-button>
    <md-button class="md-accent" ng-click="backToInitialInfo()">Edit Company Info</md-button>
</md-content>