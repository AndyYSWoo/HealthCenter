<?php

namespace App\Http\Controllers\player\sports;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\sportsentry;
use Auth;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 完成
        $today_run  = sportsentry::where('user_id',Auth::user()->id)
                                        ->where('type',sportsentry::TYPE_RUN)
                                        ->where('start_time','>=','2015-12-04 00:00:00')//date('Y-m-d H:m:s'))
                                        ->get();
        $distance   = 0;
        $calory     = 0;
        $time       = 0;
        foreach($today_run as $entry){
            $distance   += $entry->value;
            $calory     += $entry->calories;
            $time       += $entry->last_time;
        }
        
        // 目标
        $target_distance = 15000;
        $target_calory   = 1000;
        $target_time     = 16000;
        //
        $all_run    =  sportsentry::where('user_id',Auth::user()->id)
                                        ->where('type',sportsentry::TYPE_RUN)
                                        ->orderBy('start_time')
                                        ->get();
        $total_dis  = 0;
        $total_cal  = 0;
        $total_time = 0;
        foreach($all_run as $r){
            $total_dis += $r->value;
            $total_cal += $r->calories;
            $total_time+= $r->last_time;
        }
        return view('player.sports.user_act',[
                                             'distance'  => $distance
                                            ,'calory'   => $calory
                                            ,'time'     => $time
                                            ,'target_distance'  => $target_distance
                                            ,'target_calory'    => $target_calory
                                            ,'target_time'      => $target_time
                                            ,'all_run'          => $all_run
                                            ,'total_dis'        => $total_dis
                                            ,'total_cal'        => $total_cal
                                            ,'total_time'        => $total_time
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
}
