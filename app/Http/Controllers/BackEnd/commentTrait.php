<?php
namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Comments\store;
use App\Models\Comment;

trait commentTrait
{
    public function commentStore(store $request)
    {
        $requestArray = $request->all()+['user_id' => auth()->user()->id ];
         Comment::create($requestArray);
        return redirect()->route('videos.edit',['id'=>$requestArray['video_id'],'#comments']);

    }

    public function commentDelete($id)
    {
        $row = Comment::findOrFail($id);
        $row->delete();
        return redirect()->route('videos.edit',['id'=>$row->video_id,'#comments']);


    }
    public function commentUpdate($id,store $request)
    {
        $row = Comment::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('videos.edit',['id'=>$row->video_id ,'#comments']);


    }
}
