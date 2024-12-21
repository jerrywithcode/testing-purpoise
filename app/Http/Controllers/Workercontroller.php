<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;


class Workercontroller extends Controller
{

  
        function getData(){
               $data = Worker::all();
               return view('add-worker',['datas'=> $data]);

          }

    function addWorker(Request $request){
      $validator=$request->validate([
        'name' => 'required|max:255',
        'position' => 'required',
        'email' => 'required|unique:workers',
        'phone' => 'required',
        'department' => 'required',
    ]);
  
      $worker = new Worker();
      $worker->name= $request->input('name');
      $worker->position= $request->input('position');
      $worker->email= $request->input('email');
      $worker->phone= $request->input('phone');
      $worker->department= $request->input('department');
      $worker->save();
      if($worker){
        return redirect()->to('worker')->with('success','add worker successfully');
      }else{
        return redirect()->to('worker')->with('errors','add worker successfully');
      }9
    }


}
