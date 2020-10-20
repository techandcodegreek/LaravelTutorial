@extends('layouts.layout')

@section('alert')
    <div class="alert alert-info" role="alert">
        This is a info alert—check it out!
    </div>
@endsection

@section('content')

    <div class="container">
        <h1>{{ $todo['title'] }}</h1>
        <p>
            {{ $todo['description'] }}
        </p>
 


    </div>

@endsection
