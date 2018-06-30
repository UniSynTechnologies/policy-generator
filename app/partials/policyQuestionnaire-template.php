<md-content class="md-block md-padding md-vertical-margin privacyPolicyGeneratorContainer"                          ng-show="newPolicy.questionaire">
    <md-tabs md-selected="newPolicy.selectedTab" md-dynamic-height="true">
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
    <md-button class="md-accent md-raised unisyn-big-button"
               ng-click="nextTab()"
               ng-hide="newPolicy.selectedTab == 2">
        Next
    </md-button>
    <md-button class="md-primary md-raised unisyn-big-button">
        Generate Policy
    </md-button>
</md-content>