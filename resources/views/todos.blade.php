@extends('layouts.layout')

@section('alert')
    <div class="alert alert-info" role="alert">
        This is a info alert—check it out!
    </div>
@endsection

@section('content')

    <div class="container">
        <h1>Todo List:</h1>
        @foreach ($todos as $todo)
            @if ($todo['done'])
                <li><del><a href="{{ route('todo') }}?id={{$todo['id']}}">{{ $todo['title'] }}</a></del>
                    | <strong><a href="{{ route('toggle') }}?id={{$todo['id']}}">UnDone</a></strong>
                    | <strong><a href="{{ route('delTodo') }}?id={{$todo['id']}}" style="color: red;">Delete</a></strong>
                </li>
            @else
                <li>
                    <a href="/todo?id={{$todo['id']}}">{{ $todo['title'] }}</a>
                    | <strong><a href="{{ route('toggle') }}?id={{$todo['id']}}">Done</a></strong>
                </li>
            @endif
        @endforeach
        <hr>
        <h1>New ToDo</h1>
        <form action="/newtodo" method="POST">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="title">
            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description"></textarea>
            <button class="btn btn-primary">OK</button>
        </form>


    </div>

@endsection
