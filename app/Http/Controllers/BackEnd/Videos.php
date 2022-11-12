<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Videos extends Controller
{
    use commentTrait;
    public function index()
    {
        $rows = Video::with('cat', 'user');
        $rows = $rows->paginate(20);
        return view('back-end.videos.index', compact('rows'));
    }

    public function create()
    {
        $categories = Category::get();
        $skills = Skill::get();
        $tags = Tag::get();
        return view('back-end.videos.create', compact('categories', 'skills', 'tags'));

    }

    public function store(Request $request)
    {
        $file=$request->file('image');
        $fileName=time().str_random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'),$fileName);
        $requestArray = ['user_id' => auth()->user()->id ,'image'=>$fileName]+$request->all() ;
        $row = Video::create($requestArray);


        $this->addTagSkill($row, $requestArray);

        return redirect()->route('videos.index');
    }// end store


    public function edit($id)
    {
        $row = Video::findOrFail($id);
        $skills = Skill::get();
        $tags = Tag::get();
        $categories = Category::get();
        $selectedSkills = [];
        $selectedTags = [];
        $comments = [];


        if (request()->route()->parameter('id')) {
            $selectedSkills = Video::find(request()->route()->parameter('id'))
                ->skills()->get()->pluck('id')->toArray();
        }
        if (request()->route()->parameter('id')) {
            $selectedTags = Video::find(request()->route()->parameter('id'))
                ->tags()->get()->pluck('id')->toArray();
        }
        if (request()->route()->parameter('id')) {
            $comments = Video::find(request()->route()->parameter('id'))
                ->comments()->orderBy('id','desc')-> with('user')->get();
        }
        return view('back-end.videos.edit', compact('row', 'categories', 'skills', 'tags', 'selectedSkills', 'selectedTags','comments'));
    }// end edit


    public function update($id, Request $request)
    {

        $row = Video::findOrFail($id); // search by given id
        $requestArray = $request->all();

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $fileName=time().str_random('10').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads'),$fileName);
            $requestArray = ['image'=>$fileName]+ $requestArray ;
        }

        $row->update($requestArray);

//
        $this->addTagSkill($row, $requestArray);
        //return redirect()->route('users.edit',['id'=> $row->id]);
        return redirect()->route('videos.index');

    }

    public function destroy($id)
    {
        $row = Video::findOrFail($id)->delete();

        return redirect()->route('videos.index');


    }

    protected function addTagSkill($row, $requestArray)
    {
        if (isset($requestArray['skills']) && !empty($requestArray['skills'])) {
            $row->skills()->sync($requestArray['skills']);
        }

        if (isset($requestArray['tags']) && !empty($requestArray['tags'])) {
            $row->tags()->sync($requestArray['tags']);
        }
    }
}
