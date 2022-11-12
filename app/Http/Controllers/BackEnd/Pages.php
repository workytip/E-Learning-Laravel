<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Pages extends Controller
{
    public function index()
    {

        $rows= Page::paginate(20);
        return view('back-end.pages.index', compact('rows'));
    }

    public function create()
    {
        return view('back-end.pages.create');

    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required','min:6','max:100'],
            'meta_keywords' =>  ['required','max:100'],
            'meta_des' =>  ['required','min:6','max:100'],
            'des' =>  ['required','min:6','max:150'],


        ]);
        Page::create([
            'name' => $request->name,
            'meta_keywords' => $request->meta_keywords,
            'meta_des' =>$request->meta_des,
            'des' =>$request->des,
        ]);
        return  redirect()->route('pages.index');
    }
    public function edit($id)
    {
        $row = Page::findOrFail($id);
        return view('back-end.pages.edit',compact('row'));
    }
    public function update($id ,Request $request)
    {
        $row = Page::findOrFail($id); // search in given id


        $requestArray=[
            'name' => $request->name,
            'meta_keywords' => $request->meta_keywords,
            'meta_des' =>$request->meta_des,
            'des' =>$request->des,];


        // dd( $requestArray);
        $row->update($requestArray);
        //return redirect()->route('users.edit',['id'=> $row->id]);
        return  redirect()->route('pages.index');

    }

    public function destroy($id)
    {
        $row = Page::findOrFail($id)->delete();

        return redirect()->route('pages.index');
    }

}
