<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Student;
use Illuminate\Database\Console\Migrations\StatusCommand;

class StudentController extends Controller
{ 

    function student(){
        
       $data =\App\Models\Student::all();
       return view('students',['data'=>$data]);
    }

    function jsonDaata(){
        $dataJson= Http::get("https://jsonplaceholder.typicode.com/posts");
        return view('jsondata',['datas'=>json_decode($dataJson)]);
    }

    function resultData(){
        
         $result= Student::insert([

            'name'=> 'sdfsdfs',
            'roll'=> '5',
            'class'=> '10',
         ]);
         if($result){
           
            return'  insert';
         }else{
            return ' not insert';
         }
       
         
    }
}
