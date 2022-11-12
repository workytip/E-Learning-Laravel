<?php

namespace App\Http\Controllers\BackEnd;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class users extends BackEndController
{
     public function index()
     {

         $rows= User::paginate(20);
         return view('back-end.users.index', compact('rows'));
     }

    public function create()
    {
        return view('back-end.users.create');

    }

    public function store(Request $request)
    {
         request()->validate([
             'name' => ['required','min:6','max:100'],
             'email' =>  ['required','max:100'],
             'password' =>  ['required','min:6','max:100'],
             'group' =>  ['required'],

         ]);
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
             'group' => $request->group,
        ]);
        return  redirect()->route('users.index');
    }
    public function edit($id)
    {
        $row = User::findOrFail($id);
        return view('back-end.users.edit',compact('row'));
    }
    public function update($id ,Request $request)
    {
        $row = User::findOrFail($id); // search in given id

      /*  $row->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        dd($row);*/
       $requestArray=[
            'name' => $request->name,
            'email' => $request->email,
             'group' => $request->group,];

        if(request()->has('password') && request()->get('password') !="" ){
            $requestArray = $requestArray + ['password' => Hash::make($request->password)];
        }
           // dd( $requestArray);
        $row->update($requestArray);
        //return redirect()->route('users.edit',['id'=> $row->id]);
        return  redirect()->route('users.index');

    }

    public function destroy($id)
    {
        $row = User::findOrFail($id)->delete();

        return redirect()->route('users.index');
    }


}
