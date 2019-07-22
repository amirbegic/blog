<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertTaskRequest;
use App\Http\Requests\InsertUserTaskRequest;
use App\tasks;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    //
    public function addTask()
    {
        $users = User::all();
        $tasks = tasks::all();


        return view('task.addTask')->with('users', $users)->with('tasks', $tasks);
    }


    /**
     * @param InsertUserTaskRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveTask(InsertUserTaskRequest $request)
    {
        $taskID = $request->post('taskID');
        $userID = $request->post('userID');


        $user = User::find($userID);

        $exists = $user->task->contains($taskID);
        if (!$exists) {
            $taskUser = new \App\task_user;
            $taskUser->task_id = $taskID;
            $taskUser->user_id = $userID;
            $taskUser->save();
        } else {

            Session::flash('message', 'Task is already assigned to this user');


        }


        return redirect(route('task.addTask'));
    }

    public function newTask(InsertTaskRequest $request)
    {

        $task = $request->post('task');
        $userID = $request->post('userID');

        $tasks = new \App\tasks;
        $tasks->name = $task;
        $tasks->save();

        $taskUser = new \App\task_user;
        $taskUser->task_id = $tasks->id;
        $taskUser->user_id = $userID;
        $taskUser->save();


        return redirect(route('task.addTask'));


    }
}
