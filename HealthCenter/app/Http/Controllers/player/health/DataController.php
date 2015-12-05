<?php

namespace App\Http\Controllers\player\health;
use Auth;
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
        // Good&avg:h,w,bph,bpl,hr
        $goods  = [185,70,140,90,70];
        $avgs   = [170,64,150,95,80];
                                    
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
