<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        return view('welcome', [
            'name' => 'Bill', 
            'todolist' => [
                ['title' => 'Να αγοράσω γάλα', 'done' => true],
                ['title' => 'Τηλέφωνο στον πελάτη', 'done' => false],
                ['title' => 'BugFix', 'done' => false],
                ['title' => 'Να αγοράσω ψωμί', 'done' => true]
            ]
        ]);
    }
}
