@extends("layouts.app")

@section("content")

 @if (Auth::check())
<h1>To Do List</h1>
    <?php if (count($tasks)>0){ ?>
        <table class ="table table-striped">
            <thead>
                <tr>
                    <td>user_id</td>
                    <td>id</td>
                    <th>ToDo</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task){ ?>
                <tr>
                    <td>{!! link_to_route("tasks.index",$task->user_id,["task"=>$task->user_id]) !!}</td>
                    <td>{!! link_to_route("tasks.show",$task->id,["task"=>$task->id])!!}</td>
                    <td>{{$task->content}}</td>
                    <td>{{$task->status}}</td>
                </tr>
            </tbody>
                <?php } ?> 
        </table>
        {!! link_to_route("tasks.create","新規タスク登録",[],["class"=>"btn btn-primary"])!!}
    <?php } ?> 
 @else 
    <div class="center jimbotron">
        <div class="text-center">
            <h1>Welcome to tasklist</h1>
     {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
  
@endif
    
    
@endsection