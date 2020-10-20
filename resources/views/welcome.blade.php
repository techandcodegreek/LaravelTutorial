@extends('layouts.layout')

@section('alert')
    <div class="alert alert-info" role="alert">
        This is a info alert—check it out!
    </div>
@endsection

@section('content')

    <div class="container">
        <h1>ToDo list of {{ $name }}</h1>
        <ul>
            @foreach($todolist as $todo)
                @if ($todo['done'])
                    <li><del>{{ $todo['title'] }}</del></li>
                @else
                    <li>{{ $todo['title'] }}</li>
                @endif
            @endforeach
        </ul>
    </div>
    <hr>

    {{-- @foreach($todolist as $todo)
        @include('includes.demoitem', ['todo' => $todo])
    @endforeach --}}
    


@endsection
