<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Comment::class);
        return response()->json(
            Comment::create([
                'user_id'=>$request->user_id,
                'city_id'=>$request->city_id,
                'comment'=>$request->comment
            ])
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $cmt)
    {
        $this->authorize('update',$cmt);
        $cmt->comment=$request->comment;
        return response()->json(
            $cmt->save()
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $cmt)
    {
        $this->authorize('delete',$cmt);
        $cmt->delete();
    }
}
