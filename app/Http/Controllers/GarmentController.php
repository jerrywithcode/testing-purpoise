<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Garment;
use Illuminate\Support\Facades\Redirect;

class GarmentController extends Controller
{
    public function index(){
     return view("garments.index");
    }
    public function addPublic(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'city' => 'required|string|max:255',
        ]);
    
        $garment = Garment::create($validated);
        return redirect('garments')->with(['message','Add data succesfully']);
    }
}
