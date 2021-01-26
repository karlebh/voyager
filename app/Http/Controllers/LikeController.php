<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
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
            'likeable_id' => ['required', 'integer'],
            'likeable_type' => ['required', 'string']
        ]);

        $request->user()->likes()->firstOrCreate($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $request->validate([
             'likeable_id' => ['required', 'integer'],
            'likeable_type' => ['required', 'string']
        ]);

        Like::whereLikeableId($request->likeable_id)
                ->whereLikeableType($request->likeable_type)
                ->whereUserId($request->user()->id)
                ->delete();
    }
}
