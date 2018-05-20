var app = angular.module('pageBuilder', ['ngMaterial', 'ngMessages']);
app.controller('builder', function($scope) {
    $scope.layout = [];

    $scope.addNewRow = function(){
      $scope.layout.push({
        columns: []
      });
    };

    $scope.addColumn = function(row, layout){
      for(var i=0;i<layout.length;i++){
        $scope.layout[row].columns.push({
          width: layout[i],
          type: false,
          options: false
        });
      }
    };

    $scope.addComponent = function(column, type){
      return [column, type];
    };
});
