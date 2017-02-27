<!doctype html>
<html ng-app="todoApp" ng-init="qty=1;cost=2">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="todo.js"></script>
</head>
<body>
<h2>Todo</h2>

<div ng-controller="TodoListController as todoList">
    <span>{{todoList.remaining()}} of {{todoList.todos.length}} remaining</span>
    [ <a href="" ng-click="todoList.archive()">archive</a> ]
    <ul class="unstyled">
        <li ng-repeat="todosss in todoList.todos">
            <label class="checkbox">
                <input type="checkbox" ng-model="todosss.done">
                <span class="done-{{todssso.done}}">{{todosss.text}}</span>
            </label>
        </li>
    </ul>

    <form ng-submit="todoList.addTodo()">
        <input type="text" ng-model="todoList.todoText"  size="30"
               placeholder="add new todo here">
        <input class="btn-primary" type="submit" value="add">
    </form>

</div>

<div>
    <b>Invoice:</b>
    <div>
        Quantity: <input type="number" min="0" ng-model="qty">
    </div>
    <div>
        Costs: <input type="number" min="0" ng-model="cost">
    </div>
    <div>
        <b>Total:</b> {{qty * cost | currency}}
    </div>
</div>

</body>
</html>

<script>

</script>