<!DOCTYPE html>
<html ng-app="todoApp">
    <head>
        <title>Tasks</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
        <script src="js/todo.js"></script>

    </head>
    <body ng-controller="TodoListController as todoList">
      <div class="container">

        <h2>Tasks</h2>

        <ul class="list-group">
          <li class="list-group-item" ng-repeat="todo in todoList.todos">@{{todo.name}}</li>
        </ul>

        <form class="form-inline" ng-submit="todoList.addTodo()">
          <input class="form-control" type="text" size="30" placeholder="Add new task here" ng-model="todoList.todoText">
          <input class="btn btn-primary" type="submit" value="add">
        </form>

      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
