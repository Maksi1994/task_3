@extends('master', [
'title' => 'Logs'
])

@section('content')
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/log">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/log/done">Done</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/log/waiting">Waiting to work</a>
        </li>
    </ul>

    <ul class="list-group w-75 mx-auto mt-5">
        <h1>Tasks log:</h1>
        @foreach($logs as $task)
            <li class="list-group-item d-flex mb-2 justify-content-between">
                <a>{{$task->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection