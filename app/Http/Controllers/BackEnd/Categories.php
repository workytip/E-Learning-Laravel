<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Categories extends Controller
{
    public function index()
    {

        $rows= Category::paginate(20);
        return view('back-end.categories.index', compact('rows'));
    }

    public function create()
    {
        return view('back-end.categories.create');

    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required','min:6','max:100'],
            'meta_keywords' =>  ['required','max:100'],
            'meta_des' =>  ['required','min:6','max:100'],

        ]);
        Category::create([
            'name' => $request->name,
            'meta_keywords' => $request->meta_keywords,
            'meta_des' =>$request->meta_des,
        ]);
        return  redirect()->route('categories.index');
    }
    public function edit($id)
    {
        $row = Category::findOrFail($id);
        return view('back-end.categories.edit',compact('row'));
    }
    public function update($id ,Request $request)
    {
        $row = Category::findOrFail($id); // search in given id


        $requestArray=[
            'name' => $request->name,
            'meta_keywords' => $request->meta_keywords,
            'meta_des' =>$request->meta_des,
        ];



        // dd( $requestArray);
        $row->update($requestArray);
        //return redirect()->route('users.edit',['id'=> $row->id]);
        return  redirect()->route('categories.index');

    }

    public function destroy($id)
    {
        $row = Category::findOrFail($id)->delete();

        return redirect()->route('categories.index');
    }


}
