<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publics;
class PublicController extends Controller
{
    //show public data

     function public(){
        return view("publics");
    }

    // public add controller
  

    public function addPublic(Request $request)
{
    // Validate the incoming request data
     $validatedData = $request->validate([
        'name' => 'required|string|max:255',         // Name must be a string and not empty
        'age' => 'required|integer|min:1|max:120',  // Age must be an integer between 1 and 120
        'city' => 'required|string|max:255',        // City must be a string and not empty
        'file' => 'required|file|mimes:jpg,png,jpeg|max:2048', // File must be an image (jpg, png) and <= 2MB
    ]);

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
        $filePath = $request->file('file')->store('uploads', 'public');
        $validatedData['file_path'] = $filePath;
    }
// Save the data to the 'publics' table
   Publics::create($validatedData);
    // Save the data to the database (if needed)
    // Example: User::create($validatedData);
  echo "done";
    // return back()->with('success', 'Data submitted successfully!');
}

}
