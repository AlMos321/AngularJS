<!doctype html>
<html ng-app="todoApp" ng-init="qty=1;cost=2">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="task1.js"></script>
</head>
<body>
<h2>First test example</h2>
<h6>Films that user looked</h6>

<script>
    var headerMessage = "My own anjularJs application";
    var modelVar = {
        name: "User",
        items: [
            {name: "film1", looked: "true"},
            {name: "film2", looked: "false"},
            {name: "film3", looked: "true"},
            {name: "film4", looked: "true"},
            ]
    };
    angular.module('todoApp', []).controller('TodoListController', function ($scope) {
        $scope.msg = headerMessage;
        $scope.modelVal = modelVar;
        $scope.someAction = function () {
            alert("Film name: "+ $scope.input1);
            $scope.modelVal.items.push(
                {name: $scope.input1, looked: "false"}
            );
        }
    });
</script>

<div ng-controller="TodoListController as todoList">
    <h2>{{msg}}</h2>
    <p ng-repeat="modelval in modelVal.items">{{modelval.name}} - {{modelval.looked}}</p>
    <hr>
    <h3>Some input test</h3>
    <input ng-model="input1">
    <button ng-click="someAction()">GO</button>
</div>


</body>
</html>

<script>

</script>