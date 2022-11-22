<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crud;

class CrudController extends Controller
{
    public function index(){

        $cruds = Crud::all();
        return view('layouts.crud',['cruds' => $cruds]);
    }

    public function create(){
        return view('layouts.new');
    }

    public function store(Request $request){
        $crud = new Crud;
        $crud->Name = $request->name;
        $crud->Stream = $request->stream;
        $crud->Roll = $request->roll;
        
        $crud->save();
        return redirect('/crud');

    }

    public function edit($id){
        $crud = Crud::where('id',$id)->first();
        return view('layouts.edit',compact('crud'));
    }

    public function update(Request $request, $id){
        $crud = Crud::where('id',$id)->first();
        $crud->Name = $request->name;
        $crud->Stream = $request->stream;
        $crud->Roll = $request->roll;

        $crud->save();

        return redirect('/crud');


    }
    public function destroy($id){
        $crud = Crud::whereId($id)->first();
        $crud->delete();

        return redirect('/crud');

    }
}
