<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentFormRequest $request)
    {
        $this->authorize('create',Comment::class);
        return response()->json(
            Comment::create([
                'user_id'=>User::get()->id,
                'city_id'=>$request->city_id,
                'comment'=>$request->comment,
                'created_at'=>now()
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
    public function update(Request $request, $id)
    {
        $cmt=Comment::find($id);
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
    public function destroy($id)
    {
        $cmt=Comment::find($id);
        $this->authorize('delete',$cmt);
        $cmt->delete();
    }
}
