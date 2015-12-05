<?php

namespace App\Http\Controllers\player\health;
use Auth,Redirect;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\healthadvice;
use App\healthentry;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $last_height = healthentry::where('user_id',Auth::user()->id)
                                    ->where('type',healthentry::TYPE_HEIGHT)
                                    ->orderBy('begin_time','desc')
                                    ->first();
        $last_weight = healthentry::where('user_id',Auth::user()->id)
                                    ->where('type',healthentry::TYPE_WEIGTH)
                                    ->orderBy('begin_time','desc')
                                    ->first();
        $last_bp     = healthentry::where('user_id',Auth::user()->id)
                                    ->where('type',healthentry::TYPE_BLOODPRESSURE)
                                    ->orderBy('begin_time','desc')
                                    ->first();
                                    
        $last_hr     = healthentry::where('user_id',Auth::user()->id)
                                    ->where('type',healthentry::TYPE_HEARTRATE)
                                    ->orderBy('begin_time','desc')
                                    ->first();

        $weights     = healthentry::where('user_id',Auth::user()->id)
                                    ->where('type',healthentry::TYPE_WEIGTH)
                                    ->orderBy('begin_time')
                                    ->get();
        // Good&avg:h,w,bpl,bph,hr
        $goods  = [185,70,90,140,70];
        $avgs   = [170,64,95,150,80];
                                    
        $health_advices = healthadvice::where('player_id',Auth::user()->id)->get();
        return view('player.health.user_health',[
                                                'health_advices' => $health_advices
                                               ,'last_height'   => $last_height
                                               ,'last_weight'   => $last_weight
                                               ,'last_bp'       => $last_bp
                                               ,'last_hr'       => $last_hr
                                               ,'weights'       => $weights
                                               ,'goods'         => $goods
                                               ,'avgs'          => $avgs
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
        return view('player.health.user_input_healthdata');
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
        if($request->hasFile('health_file')){// 上传文件
            $xml = $request->file('health_file');
            if($xml->getClientOriginalExtension() != 'xml'){
                return 'File extension is not xml!';
            }
            $new_name = 'xml_'.date('Y-m-d H:m:s').Auth::user()->id.'.xml';
            $xml->move(base_path().'/public/file/health/',$new_name);
            $obj = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/file/health/'.$new_name);
            for($i = 0 ; $i < count($obj->xpath('healthentry'));++$i){
                $e = $obj->xpath('healthentry')[$i];
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = $e->xpath('type')[0];
                $entry->level       = $e->xpath('level')[0];
                $entry->value       = $e->xpath('value')[0];
                $entry->value2      = $e->xpath('value2')[0];
                $entry->last_time   = $e->xpath('last_time')[0];
                $entry->begin_time  = $e->xpath('begin_time')[0];
                $entry->end_time    = $e->xpath('end_time')[0];
                $entry->description = $e->xpath('description')[0];
                $entry->save();
            }
        }else{ // 手动输入
            if($request->input('temp')){
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = healthentry::TYPE_TEMPERATURE;
                $entry->begin_time  = date('Y-m-d H:m:s');
                $entry->value       = $request->input('temp');
                $entry->save();
            }
            if($request->input('height')){
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = healthentry::TYPE_HEIGHT;
                $entry->begin_time  = date('Y-m-d H:m:s');
                $entry->value       = $request->input('height');
                $entry->save();
            }
            if($request->input('weight')){
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = healthentry::TYPE_WEIGTH;
                $entry->begin_time  = date('Y-m-d H:m:s');
                $entry->value       = $request->input('weight');
                $entry->save();
            }
            if($request->input('hr')){
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = healthentry::TYPE_HEARTRATE;
                $entry->begin_time  = date('Y-m-d H:m:s');
                $entry->value       = $request->input('hr');
                $entry->save();
            }
            if($request->input('bph')){
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = healthentry::TYPE_BLOODPRESSURE;
                $entry->begin_time  = date('Y-m-d H:m:s');
                $entry->value       = $request->input('bph');
                $entry->value2      = $request->input('bpl');
                $entry->save();
            }
            if($request->input('dh')){
                $entry = new healthentry;
                $entry->user_id     = Auth::user()->id;
                $entry->type        = healthentry::TYPE_SLEEP;
                $entry->level       = healthentry::LEVEL_GOOD;
                $entry->begin_time  = date('Y-m-d H:m:s');
                $entry->value       = $request->input('dh')*3600+$request->input('dm')*60+$request->input('ds');
                $entry->save();
                
                $entry2 = new healthentry;
                $entry2->user_id     = Auth::user()->id;
                $entry2->type        = healthentry::TYPE_SLEEP;
                $entry2->level       = healthentry::LEVEL_MID;
                $entry2->begin_time  = date('Y-m-d H:m:s');
                $entry2->value       = $request->input('mh')*3600+$request->input('mm')*60+$request->input('ms');
                $entry2->save();
                
                $entry3 = new healthentry;
                $entry3->user_id     = Auth::user()->id;
                $entry3->type        = healthentry::TYPE_SLEEP;
                $entry3->level       = healthentry::LEVEL_GOOD;
                $entry3->begin_time  = date('Y-m-d H:m:s');
                $entry3->value       = $request->input('bh')*3600+$request->input('bm')*60+$request->input('bs');
                $entry3->save();
            }
        }
        return Redirect::to('/player/health/data');
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
