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
        $category = new Category;
        $category->title = $request->title;
        $category->save();
        return redirect('/crud');

    }

    public function edit($id){
        $category = Crud::where('id',$id)->first(0);
        return view('categories.edit',['category' => $category]);
    }

    public function update(Request $request, $id){
        $category = Crud::where('id',$id)->first();
        $category->Name = $request->Name;
        $category->Roll = $request->Roll;

        $category->save();

        return redirect('/');


    }
    public fucntion destroy($id){
        $category = Crud::whereId($id)->first();

        $category->delete();

        return redirect('/');

    }
}
