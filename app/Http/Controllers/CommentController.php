<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
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
        $data = $request->validate([
            'content' => ['required', 'string'],
            'parent_id' => ['integer', 'nullable'],
            'post_id' => ['required', '']
        ]);

        $request->user()->comments()->firstOrCreate($data);

        return back();
    }

    public function show($id)
    {
        $commentLiked = Like::whereUserId(request()->user()->id)
                    ->whereLikeableId($id)
                    ->whereLikeableType('App\Models\Comment')
                    ->exists();

        $commentLikeCount = Like::whereLikeableId($id)
                        ->whereLikeableType('App\Models\Comment')
                        ->count();

        return [$commentLiked, $commentLikeCount];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
