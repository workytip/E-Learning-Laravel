<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Tags extends Controller
{
    public function index()
    {

        $rows= Tag::paginate(20);
        return view('back-end.tags.index', compact('rows'));
    }

    public function create()
    {
        return view('back-end.tags.create');

    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required','min:6','max:100'],


        ]);
        Tag::create([
            'name' => $request->name,


        ]);
        return  redirect()->route('tags.index');
    }
    public function edit($id)
    {
        $row = Tag::findOrFail($id);
        return view('back-end.tags.edit',compact('row'));
    }
    public function update($id ,Request $request)
    {
        $row = Tag::findOrFail($id); // search in given id


        $requestArray=[
            'name' => $request->name,
        ];


        // dd( $requestArray);
        $row->update($requestArray);
        //return redirect()->route('users.edit',['id'=> $row->id]);
        return  redirect()->route('tags.index');

    }

    public function destroy($id)
    {
        $row = Tag::findOrFail($id)->delete();

        return redirect()->route('tags.index');
    }

}
