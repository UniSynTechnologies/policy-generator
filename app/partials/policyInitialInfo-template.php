<md-content class="md-block md-padding md-vertical-margin privacyPolicyGeneratorContainer"
            ng-show="newPolicy.addingInfo">
    <form name="initialInfoForm" ng-submit="showQuestionnaire()">
        <md-toolbar class="md-primary">
            <div class="md-toolbar-tools" style="text-align: center;">
                <label class="md-headline" flex>Just Some Basic Info...</label>
            </div>
        </md-toolbar>
        <div layout="column" layout-gt-sm="row">
            <md-input-container flex="50">
                <label>Company Name</label>
                <input ng-model="newPolicy.companyName" name="companyName"  ng-required="true">
                <div ng-messages="initialInfoForm.companyName.$error">
                    <div ng-message="required"><span class="error">This field is required.</span></div>
                </div>
            </md-input-container>
            <md-input-container flex="50">
                <label>Email Address</label>
                <input ng-model="newPolicy.email" name="email"  ng-required="true">
                <div ng-messages="initialInfoForm.email.$error">
                    <div ng-message="required"><span class="error">This field is required.</span></div>
                </div>
            </md-input-container>
        </div>
        <md-input-container class="md-block">
            <label>Address</label>
            <input ng-model="newPolicy.companyAddress.street" name="companyAddressStreet"  ng-required="true">
            <div ng-messages="initialInfoForm.companyAddressStreet.$error">
                <div ng-message="required"><span class="error">This field is required.</span></div>
            </div>
        </md-input-container>
        <div layout="column" layout-gt-sm="row">
            <md-input-container flex="30">
                <label>City</label>
                <input ng-model="newPolicy.companyAddress.city" name="companyAddressCity"  ng-required="true">
                <div ng-messages="initialInfoForm.companyAddressCity.$error">
                    <div ng-message="required"><span class="error">This field is required.</span></div>
                </div>
            </md-input-container>
            <md-input-container flex="20">
                <label>State/Province</label>
                <input ng-model="newPolicy.companyAddress.state" name="companyAddressState"  ng-required="true">
                <div ng-messages="initialInfoForm.companyAddressState.$error">
                    <div ng-message="required"><span class="error">This field is required.</span></div>
                </div>
            </md-input-container>
        </div>
        <div layout="column" layout-gt-sm="row">
                <md-input-container flex="50">
                <label>Zip Code</label>
                <input ng-model="newPolicy.companyAddress.zip" name="companyAddressZip"  ng-required="true">
                <div ng-messages="initialInfoForm.companyAddressZip.$error">
                    <div ng-message="required"><span class="error">This field is required.</span></div>
                </div>
            </md-input-container>
            <md-input-container flex="50">
                <label>Country</label>
                <input ng-model="newPolicy.companyAddress.country" name="companyAddressCountry"  ng-required="true">
                <div ng-messages="initialInfoForm.companyAddressCountry.$error">
                    <div ng-message="required"><span class="error">This field is required.</span></div>
                </div>
            </md-input-container>
        </div>
        <md-input-container class="md-block">
            <label>Website Url</label>
            <input ng-model="newPolicy.companyWebsite" name="companyWebsite"  ng-required="true">
            <div ng-messages="initialInfoForm.companyWebsite.$error">
                <div ng-message="required"><span class="error">This field is required.</span></div>
            </div>
        </md-input-container>
        <md-button type="submit" class="md-primary md-raised unisyn-big-button">Continue</md-button>
    </form>
</md-content>