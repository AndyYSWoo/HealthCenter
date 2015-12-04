<?php

namespace App\Http\Controllers\player;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;
use App\activity;
use App\player_has_activity;
use DB;
use Response;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activities = activity::where('date','>',date('Y-m-d'))// 只显示未开始活动
                                    ->orderBy('date')
                                    ->get();
        return view('player.activity.activity',[
                                                'activities' => $activities
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
        return view('player.activity.activity_release');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newac  = new activity;
        $newac->name = $request->input('name');
        $newac->type = $request->input('group1');
        $newac->author_id = Auth::user()->id;
        $newac->place = $request->input('place');
        $newac->description = $request->input('desc');
        $newac->poster = '/img/activity/poster1.jpg';
        $newac->date = $request->input('date');
        $newac->time = $request->input('time');
        $newac->contact = $request->input('contact');
        $newac->save();
        if($request->hasFile('poster')){
            $pos_file = $request->file('poster');
            $pos_name = 'activity_'.$newac->id.'.'.$pos_file->getClientOriginalExtension();
            $pos_file->move(base_path().'/public/img/activity/',$pos_name);
            $newac->poster = '/img/activity/'.$pos_name;
            $newac->save();           
        }
        return Redirect::to('/player/activity');
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
        $activity = activity::find($id);
        $join     = player_has_activity::where('player_id',Auth::user()->id)->where('activity_id',$id)->get()->count();
        return view('player.activity.activity_info',[
                                                    'activity' => $activity,
                                                    'join'     => $join
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
        if(player_has_activity::where('player_id',Auth::user()->id)->where('activity_id',$id)->get()->count()==0){
            $rel = new player_has_activity;
            $rel->player_id = Auth::user()->id;
            $rel->activity_id = $id;
            $rel->save();
        }
        return Response::json(array(
            'success'   => true,
            'data'      => 'sucess'
        ));        
    }
}
