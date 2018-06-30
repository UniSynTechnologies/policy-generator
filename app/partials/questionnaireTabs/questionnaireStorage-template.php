<md-toolbar>
    <div class="md-toolbar-tools">
        <label class="md-headline" flex>Data Tracking and Storing</label>
        <md-button ng-click="backToInitialInfo()">Edit Company Info</md-button>
    </div>
</md-toolbar>
<br>
<div class="md-title">Typically, your company will track and store user data such as:</div>
<br>
<div>
    <strong><em>"Account Information"</em></strong>
    <br>
    <div style="text-indent: 2em;">
        Your name and email address you provide during account  creation,
        and your payment info, company name, and physical address when you
         convert to a paid account.
    </div>
    <br>
</div>
<div>
    <strong><em>"Application data"</em></strong>
    <br>
    <div style="text-indent: 2em;">
        Any data that you add to any {{ newPolicy.companyName }} application
        (such as products, order information, comments, etc.) is stored in our systems.
        Additionally, when you use our application, we store some usage analytics to  monitor performance.
    </div>
    <br>
</div>
<div>
    <strong><em>"Usage data"</em></strong>
    <br>
    <div style="text-indent: 2em;">
        We collect information about the devices you use to access our  services.
        This includes things like product version, and identifiers of your devices.
    </div>
    <br>
</div>
<div>
    <strong><em>"Cookies and other technologies"</em></strong>
    <br>
    <div style="text-indent: 2em;">
        We use “cookies” on {{ newPolicy.companyWebsite }},
        its  subdomains and it’s affiliated sites.
        A cookie is a piece of data stored on a site  visitor's hard drive,
        to help us improve your access to our site and identify repeat  visitors to our site.
        For instance, when we use a cookie to identify you,
        you would  not have to login and provide a password more than once, thereby saving time  while on our site.
        Cookies can also enable us to track and target the interests of  our users to enhance the experience on our site.
        Usage of a cookie is in no way  linked to any personally identifiable information on our site.
    </div>
    <br>
</div>
<div class="md-title">Do you track any other forms of user data?</div>
<md-radio-group ng-model="questionnaire.storage.answer"
                class="md-vertical-padding"
                layout="row"
                layout-align="space-around center">
    <md-radio-button ng-value="true">Yes</md-radio-button>
    <md-radio-button ng-value="false">No</md-radio-button>
</md-radio-group>
<div ng-show="questionnaire.storage.answer">
    <div class="md-title">Please provide a brief description</div>
    <md-input-container class="md-block" flex>
        <label>Description</label>
        <textarea ng-model="questionnaire.storage.answerDescription"></textarea>
    </md-input-container>
</div>