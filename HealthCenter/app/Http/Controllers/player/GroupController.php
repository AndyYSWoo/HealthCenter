<?php

namespace App\Http\Controllers\player;
use Auth,Redirect, Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\group;
use App\player_in_group;
use App\post;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = group::all()->sortByDesc('id');
        return view('player.group.group',[
            'groups' => $groups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('player.group.group_create');
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
        $group = new group;
        $group->name = $request->input('name');
        $group->author_id = Auth::user()->id;
        $group->motto = $request->input('motto');
        $group->description = $request->input('description');
        $group->poster = '/img/group/poster/poster100.jpg';
        $group->save();
        if($request->hasFile('poster')){
            $photo = $request->file('poster');
            $photo_name = 'poster'.$group->id.'.'.$photo->getClientOriginalExtension();
            $photo->move(base_path().'/public/img/group/poster/',$photo_name);
            $group->poster = '/img/group/poster/'.$photo_name;
            $group->save();
        }
        return Redirect::to('/player/group');
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
        $posts = post::where('group_id',$id)->get();
        $group = group::find($id);
        $in = player_in_group::where('player_id',Auth::user()->id)
                        ->where('group_id',$id)
                        ->count();
                        
        return view('player.group.group_index',[
            'group' => $group,
            'posts' => $posts,
            'in'    => $in
        ]);
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
    public function join($id){
        $in = player_in_group::where('player_id',Auth::user()->id)
                                ->where('group_id',$id)
                                ->count();
        if($in==0){
            $rel = new player_in_group;
            $rel->player_id = Auth::user()->id;
            $rel->group_id  = $id;
            $rel->save();
        } 
        return Response::json(array(
            'success'   => true,
            'data'      => 'sucess'
        ));                        
    }
}
