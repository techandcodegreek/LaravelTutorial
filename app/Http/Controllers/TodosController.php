<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos', ['todos' => $todos]);
    }

    public function newtodo(Request $request){
        $todo = new Todo();
        $todo->title = $request->get('title');
        $todo->description = $request->get('description', '');
        $todo->save();
        return redirect('/');
    }

    public function toggle(Request $request){
        $todo = Todo::where('id', $request->get('id'))->first();
        $todo->done = !$todo->done;
        $todo->save();
        return redirect('/');

    }

    public function delTodo(Request $request){
        // $todo = Todo::where('id', $request->get('id'))->first();
        $todo = Todo::find($request->get('id'));
        $todo->delete();
        return redirect('/');
    }

    public function todo(Request $request){
        $todo = Todo::find($request->get('id'));
        return view('todo', ['todo' => $todo]);
    }
}
