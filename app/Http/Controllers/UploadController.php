<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);
    
        // Store the uploaded file
        $path = $request->file('file')->store('public');
       
    }
    
}
