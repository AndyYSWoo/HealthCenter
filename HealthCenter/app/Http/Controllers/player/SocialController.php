<?php

namespace App\Http\Controllers\player;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use App\feed;
use App\feedcomment;
use App\User;
use Response;
class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('player.social');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feed = new feed;
        $feed->author_id    = Auth::user()->id;
        $feed->content      = $request->input('post_content');
        $feed->photo        = 'null';
        $feed->save();
        if($request->hasFile('post_photo')){
            $photo = $request->file('post_photo');
            $photo_name = 'feed_'.$feed->id.'.'.$photo->getClientOriginalExtension();
            $photo->move(base_path().'/public/img/feed/',$photo_name);
            $feed->photo = '/img/feed/'.$photo_name;
            $feed->save();
        }
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function comment(Request $request){
        $comment = new feedcomment;
        $comment->feed_id = $request->input('feed_id');
        $comment->content = $request->input('content');
        $comment->author_id = Auth::user()->id;
        $comment->save();
        return Response::json(array(
            'success'   => true,
            'name'      => Auth::user()->name,
            'time'      => $comment->created_at->format('Y-m-d H:m:s'),
            'author_id'   => $comment->author_id
            
        ));
    }
}
