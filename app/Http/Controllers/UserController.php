<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getHome(){
        return view('userHome');
    }

    function getAbout(){
        return view('userAbout');   
    }

    function getGallary(){
        return view('userGallary');
    }

    function getContact(){
     
       return view("userContact");
    }

    function getform(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:5', 
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'message' => 'required|min:10',
        ]);

        $request->session()->put('key', $request->input('name'));
       
        $request->session()->flash('status', 'Task was successful!');

        return redirect('datasession');

    }
      
     function sessionof(Request $request){
      session()->pull('key');
      $request->session()->flash('remove', 'Task was remove!');

          return redirect('datasession');
     }
     


}
