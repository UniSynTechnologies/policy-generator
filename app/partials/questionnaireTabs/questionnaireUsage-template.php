<md-toolbar>
        <div class="md-toolbar-tools" style="text-align: center;">
            <label class="md-headline" flex>{{ questionnaireContents[ currentQuestion ].header }}</label>
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