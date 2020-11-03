@extends("layouts.app")

@section("content")

<h1>To Do List</h1>

    @if (count($tasks)>0)
        <table class ="table table-striped">
            <thead>
                <tr>
                    <td>id</td>
                    <th>ToDo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route("tasks.show",$task->id,["task"=>$task->id])!!}</td>
                    <td>{{$task->content}}</td>
                </tr>
            </tbody>
                @endforeach
        </table>
    @endif
    
    {!! link_to_route("tasks.create","新規タスク登録",[],["class"=>"btn btn-primary"])!!}

@endsection