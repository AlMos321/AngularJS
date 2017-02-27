angular.module('todoApp', [])
    .controller('TodoListController', function ($scope, $http) {
        var todoList = this;
        todoList.todos = [
            {text: 'learn AngularJS', done: true},
            {text: 'build an AngularJS app', done: false}];

        todoList.addTodo = function () {
            todoList.todos.push({text: todoList.todoText, done: false});
            todoList.postData(todoList.todoText);
            todoList.todoText = '';
        };

        todoList.remaining = function () {
            var count = 0;
            angular.forEach(todoList.todos, function (todo) {
                count += todo.done ? 0 : 1;
            });
            return count;
        };

        todoList.archive = function () {
            var oldTodos = todoList.todos;
            todoList.todos = [];
            angular.forEach(oldTodos, function (todo) {
                if (!todo.done) todoList.todos.push(todo);
            });
        };

        todoList.postData = function (message) {
            /*
            post method 1
            $http({
                url: 'action.php',
                method: "POST",
                data: {'message': message}
            })
                .then(function (response) {
                        // success
                    },
                    function (response) { // optional
                        // failed
                    });
            */
            //post method 2
            var dataObj = {
                message : "message1",
                message1 : "message2",
                message2 : "message3"
            };
            var res = $http.post('action.php', dataObj);
        }



    });