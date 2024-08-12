<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
        </br>
            <h1>Daily Task</h1>
                <div class="col-mid-12">

                    <!-- view the error massage for the customer -->
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>

                    @endforeach

                   <form method="post" action="/saveTask">
                    {{csrf_field()}}; <!-- include for the all form for security action -->
                    <input type="text" class="form-control" name="task" placeholder="Enter your Task Here">
                    </br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                    <input type="button" class="btn btn-warning" value="CLEAR">
                   </form>
               
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>TASKS</th>
                        <th>Completed</th>
                            
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->Task}}</td>
                                <td>{{$task->isCompleted}}</td>
                            </tr>
                            @endforeach
                </div>
        </div>
    </div>
</body>
</html>