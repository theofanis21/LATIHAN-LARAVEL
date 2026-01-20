<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller {
    public function index() {
        $todos = Todo::orderBy('id', 'desc')->get();
        return view('index', compact('todos'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        
        if ($request->has('is_completed')) {
            $todo->is_completed = 1;
            $todo->completed_at = now();
        } else {
            $todo->is_completed = 0;
            $todo->completed_at = null;
        }
        
        $todo->save();
        return redirect('/');
    }

    public function complete($id) {
    $todo = Todo::find($id);
    $todo->is_completed = 1;
    $todo->completed_at = now();
    $todo->save();

    return redirect('/')->with('success', 'Tugas berhasil diselesaikan!');
}
}