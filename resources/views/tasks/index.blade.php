@extends("layouts.app")

@section("content")

<h1>To Do List</h1>

    <?php if (count($tasks)>0){ ?>
        <table class ="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <th>ToDo</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task){ ?>
                <tr>
                    <td>{!! link_to_route("tasks.show",$task->id,["task"=>$task->id])!!}</td>
                    <td>{{$task->content}}</td>
                    <td>{{$task->status}}</td>
                </tr>
            </tbody>
                <?php } ?> 
            
        </table>
    <?php } ?> 
    
    {!! link_to_route("tasks.create","新規タスク登録",[],["class"=>"btn btn-primary"])!!}

@endsection