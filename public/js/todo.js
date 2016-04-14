angular.module('todoApp', [])
  .controller('TodoListController', function ($http) {
    var todoList = this;

    $http.get('tasks').success(function(data) {
       todoList.todos = data;
    });

    todoList.addTodo = function() {
      $http.post('task', {name: todoList.todoText}).success(function(data) {
        todoList.todos.push({name: data.name});
        todoList.todoText = '';
      });
    }
  });
