<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    private $validations = [
        'done'          => 'required|boolean',
        'urgent'        => 'required|boolean',
        'creation_date' => 'required|date',
        'expire_date'   => 'required|date',
        'title'         => 'required|string|max:50',
        'details'       => 'required|string',
        'image'         => 'required|string|max:300',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data validation
        $request->validate($this->validations);

        $data = $request->all();

        $newTask = new Task();

        $newTask->done              = $data['done'];
        $newTask->urgent            = $data['urgent'];
        $newTask->creation_date     = $data['creation_date'];
        $newTask->expire_date       = $data['expire_date'];
        $newTask->title             = $data['title'];
        $newTask->details           = $data['details'];
        $newTask->image             = $data['image'];

        $newTask->save();

        return redirect()->route('tasks.index', ['task' => $newTask->id])->with('status', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
