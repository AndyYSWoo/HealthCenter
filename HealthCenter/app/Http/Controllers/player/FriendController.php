<?php

namespace App\Http\Controllers\player;

use Illuminate\Http\Request;
use Response;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\friendship;
class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('player.friend.social');
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
        //
        
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
    
    public function accept($id){
        $req = friendship::find($id);
        if($req->status != friendship::STATUS_ACCEPTED){
            $req->update(['status'=>friendship::STATUS_ACCEPTED]);
            $rel = new friendship;
            $rel->follower_id = $req->followee_id;
            $rel->followee_id = $req->follower_id;
            $rel->status = friendship::STATUS_ACCEPTED;
            $rel->save();           
        }
        return Response::json(array(
            'success'   => true,
        ));
    }
    public function deny($id){
        $req = friendship::find($id);
        if($req){
            $req->delete();
        }
        return Response::json(array(
            'success'   => true,
        ));
    }
}
