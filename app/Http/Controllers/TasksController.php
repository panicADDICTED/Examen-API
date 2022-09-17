<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return \response($tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countU = Task::where('status', 'Pendiente')->where('user_name',$request->user_name)->count();
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'status'=> 'required',
            'user_name'=> 'required',
            'company'=> 'required'

       ]);
        if($countU>=5){
        
            return \response('Este Usuario ya tiene 5 tareas asignadas');

        }else{
        $task = Task::create($request->all());
        return \response($task);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return \response($task);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->status = 'Completado';
        $task->save();
        return \response($task);
       

        
    }
    public function updateStatus(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->status = 'Completado';
        $task->expiration_date = date('Y-m-d H:m:s');
        $task->save();
        $count = Task::where('status', 'Pendiente')->where('user_name',$task->user_name)->count();

        $user = User::where('name', $task->user_name)->first();
        $user->task_num = $count;
        $user->save();
        return \response($task);
       

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);

        return \response("La tarea ${id} se elimino correctamente");
    }

    public function pendingTasks()
    {
        $tasks = Task::where('status', 'Pendiente')->orderBy('company')->get();
        $tasks->status = "pendiente";


        
        return \response($tasks);

    }

    public function b()
    {
        $users = User:: select('name')->distinct()->where('task_num','<', 5)->get();
        $msg ="Los usuarios que no tienen el maximo de tareas asignadas son:";
        $countIBM = Task::where('status', 'Pendiente')->where('company','IBM')->count();
        $countNet = Task::where('status', 'Pendiente')->where('company','Netcommerce')->count();
        $countLior = Task::where('status', 'Pendiente')->where('company','Lior')->count();

        if($countNet>$countIBM  && $countNet>$countLior ){
        return response()->json([
         'La empresa con mas Tareas pendientes es' => 'Netcommerce',
         'Mensaje' => $msg,
         'Usuarios' => $users
        ], 200);
        }else if($countIBM>$countNet  && $countIBM>$countLior ){
            return response()->json([
                'La empresa con mas Tareas pendientes es' => 'IBM',
                'Mensaje' => $msg,
                'Usuarios' => $users
               ], 200);
        
        }else {
            return response()->json([
                'La empresa con mas Tareas pendientes es' => 'Lior',
                'Mensaje' => $msg,
                'Usuarios' => $users
               ], 200);
        }
       

    }
}
