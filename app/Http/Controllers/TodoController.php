<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::latest()->get();
        return view('index', compact('todo'));
    }


    public function store(){
        $todo = new Todo();
        $todo->activity = request('activity');
        $todo->save();
        return redirect('/todo');
    }

    public function destroy($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
    }
}
