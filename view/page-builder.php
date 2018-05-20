<div ng-app="pageBuilder" id="pageBuilder">
    <div ng-controller="builder">
        <div class="row text-center" ng-repeat="row in layout track by $index">
            <div class="choose-layout" ng-if="row.columns.length==0">
                <button ng-click="addColumn($index, [12])">12</button>
                <button ng-click="addColumn($index, [6,6])">6/6</button>
                <button ng-click="addColumn($index, [4,4,4])">4/4/4</button>
                <button ng-click="addColumn($index, [3,3,3,3])">3/3/3/3</button>
            </div>
            <div class="column col-{{column.width}}" ng-repeat="column in row.columns track by $index">
                I am an empty column
            </div>
        </div>
        <div class="row text-center add-row" ng-click="addNewRow()">
            Add Row
        </div>
    </div>
</div>
