<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Skills extends Controller
{
    public function index()
    {

        $rows= Skill::paginate(20);
        return view('back-end.skills.index', compact('rows'));
    }

    public function create()
    {
        return view('back-end.skills.create');

    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required','min:6','max:100'],


        ]);
        Skill::create([
            'name' => $request->name,


        ]);
        return  redirect()->route('skills.index');
    }
    public function edit($id)
    {
        $row = Skill::findOrFail($id);
        return view('back-end.skills.edit',compact('row'));
    }
    public function update($id ,Request $request)
    {
        $row = Skill::findOrFail($id); // search in given id


        $requestArray=[
            'name' => $request->name,
          ];


        // dd( $requestArray);
        $row->update($requestArray);
        //return redirect()->route('users.edit',['id'=> $row->id]);
        return  redirect()->route('skills.index');

    }

    public function destroy($id)
    {
        $row = Skill::findOrFail($id)->delete();

        return redirect()->route('skills.index');
    }


}
