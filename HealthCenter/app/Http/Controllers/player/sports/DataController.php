<?php

namespace App\Http\Controllers\player\sports;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\sportsentry;
use Auth,Redirect;
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
        return view('player.sports.user_input_actdata');
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
        if($request->hasFile('sports_file')){// 上传文件
            $xml = $request->file('sports_file');
            if($xml->getClientOriginalExtension() != 'xml'){
                return 'File extension is not xml!';
            }
            $new_name = 'xml_'.date('Y-m-d H:m:s').Auth::user()->id.'.xml';
            $xml->move(base_path().'/public/file/sports/',$new_name);
            $obj = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/file/sports/'.$new_name);
            for($i = 0 ; $i < count($obj->xpath('sportsentry'));++$i){
                $e = $obj->xpath('sportsentry')[$i];
                $entry = new sportsentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = $e->xpath('type')[0];
                $entry->value       = $e->xpath('value')[0];
                $entry->last_time   = $e->xpath('last_time')[0];
                $entry->calories    = $e->xpath('calories')[0];
                $entry->start_time  = $e->xpath('start_time')[0];
                $entry->save();
            }
        }else{ // 手动输入
            $entry = new sportsentry;
            $entry->user_id     = Auth::user()->id;
            $entry->type        = sportsentry::TYPE_RUN;
            $entry->value       = $request->input('dis');
            $entry->last_time   = $request->input('l_h')*3600+$request->input('l_m')*60+$request->input('l_s'); 
            $entry->calories    = $request->input('cal');
            $entry->start_time  = $request->input('date').' '.$request->input('s_h').':'.$request->input('s_m').':'.$request->input('s_s');
            $entry->save();
        }
        return Redirect::back();
        // return Redirect::to('/player/sports/data');
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
