<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
     function dataGet(){
       $data = DB::select("SELECT * FROM `users`");
       return view('data',['data'=>$data]);
     }  
}
