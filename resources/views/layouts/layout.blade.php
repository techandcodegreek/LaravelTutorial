<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Todo list'}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav>
        @if (Auth::check())
        <div class="float-right">
            {{ Auth::user()->name }}
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">Logout</button> 
            </form>
        </div>
        @else
            <button class="btn btn-success float-right">Logout</button> 
        @endif
    </nav>
    
      @yield('content')
    
  </body>
  </html>