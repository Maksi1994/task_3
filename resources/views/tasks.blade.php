@extends('master', [
'title' => 'Tasks'
])

@section('content')
    <ul class="oup w-75 mx-auto mt-5">
        <h1>Tasks list:</h1>
        @foreach($tasks as $task)
            <li class="list-group-item d-flex mb-2 justify-content-between">
                <a href="{{url("/addToTasks/$task->id")}}">{{$task->name}}</a>
                <span>{{$task->counter}}</span>
            </li>
        @endforeach
    </ul>
    <a class="mx-auto d-block w-25 mt-5 btn btn-primary btn-lg" href="/moveToWork" role="button">Move first in work</a>
@endsection