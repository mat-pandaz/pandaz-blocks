<div ng-app="pageBuilder" id="pageBuilder">
    <div ng-controller="builder">
        <div class="row text-center" ng-repeat="row in layout track by $index">
            <div class="choose-layout" ng-if="row.columns.length==0" layout="row">
                <md-button class="md-primary md-raised" ng-click="addColumn($index, [12])">12</md-button>
                <md-button class="md-primary md-raised" ng-click="addColumn($index, [6,6])">6/6</md-button>
                <md-button class="md-primary md-raised" ng-click="addColumn($index, [4,4,4])">4/4/4</md-button>
                <md-button class="md-primary md-raised" ng-click="addColumn($index, [3,3,3,3])">3/3/3/3</md-button>
                <md-button class="md-primary md-raised" ng-click="addColumn($index, [8,4])">8/4</md-button>
                <md-button class="md-primary md-raised" ng-click="addColumn($index, [4,8])">4/8</md-button>
            </div>
            <div class="column col-{{column.width}}" ng-repeat="column in row.columns track by $index">
                <div class="innerColumn" >
                    <md-button class="md-accent md-raised layout-fill" md-whiteframe="8">Add Component</md-button>
                </div>
            </div>
            <md-button class="md-fab delete-row" aria-label="FAB">
                <i class="material-icons">close</i>
              </md-button>
        </div>
        <div layout="column" layout-fill class="md-colors">
        <md-toolbar>

          <div class="md-toolbar-tools">
            <h2 md-truncate flex>PandaZ Page Builder</h2>

            <md-button ng-click="addNewRow()" class="md-accent md-raised">
             Add Row
            </md-button>
          </div>

        </md-toolbar>
      </div>
    </div>
</div>

