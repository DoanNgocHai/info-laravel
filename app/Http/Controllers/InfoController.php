<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info; 
use DD;
class InfoController extends Controller

{

    public function index()
    {
        $information = Info::all();
        return view ('info.index')->with('info', $information);

    
    }
    
    public function create()
    {
        return view('info.create');

      
        
    }
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'year' => 'required',
        ]);
        $input = $request->all();
        Info::create($input);
        return redirect('info')->with('info ad!');  
    }
    
    public function show($id)   
    {
        $info = Info::find($id);
        return view('info.show')->with('info', $info);
    }
    
    public function edit($id)
    {
        $info = Info::find($id);
        return view('info.edit')->with('information', $info);
    }
  
    public function update(Request $request, $id)
    {
        $info = Info::find($id);
        $input = $request->all();
        $info->update($input);
        return redirect('info')->with('Updated!');  
    }
  
    public function destroy($id)
    {
        Info::destroy($id);
        return redirect('info')->with('deleted!');  
    }
}
