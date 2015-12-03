<?php

namespace App\Http\Controllers\player;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\sportsentry;
use App\healthentry;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // health
        //$health_entries     = healthentry::where('user_id', Auth::user()->id)->orderBy('id')->get();
        // sleep
        $sleep_entries      = healthentry::where('user_id', Auth::user()->id)
                                            ->where('type', healthentry::TYPE_SLEEP)
                                            ->orderBy('id')
                                            ->get();
        $bad_sleep          = 0;
        $mid_sleep          = 0;
        $good_sleep         = 0;
        foreach($sleep_entries as $sleep_entry){
            if($sleep_entry->level == healthentry::LEVEL_BAD){
                $bad_sleep  += $sleep_entry->value;
            }
            if($sleep_entry->level == healthentry::LEVEL_MID){
                $mid_sleep  += $sleep_entry->value;
            }
            if($sleep_entry->level == healthentry::LEVEL_GOOD){
                $good_sleep  += $sleep_entry->value;
            }
        }
        // temperature
        $t_entries          = healthentry::where('user_id', Auth::user()->id)
                                            ->where('type', healthentry::TYPE_TEMPERATURE)
                                            ->get();
        $avg_t = 0;
        foreach($t_entries as $t_entry){
            $avg_t += $t_entry->value;
        }
        $avg_t = round($avg_t/$t_entries->count(),1);
        // heartrate
        $hr_entries         = healthentry::where('user_id', Auth::user()->id)
                                            ->where('type', healthentry::TYPE_HEARTRATE)
                                            ->get();
        $avg_hr = 0;
        foreach($hr_entries as $hr_entry){
            $avg_hr += $hr_entry->value;
        }
        $avg_hr = round($avg_hr/$hr_entries->count(),1);
        // blood_pressure
        $bp_entries         = healthentry::where('user_id', Auth::user()->id)
                                            ->where('type', healthentry::TYPE_BLOODPRESSURE)
                                            ->get();
        $avg_bp_high = 0;
        $avg_bp_low  = 0;
        foreach($bp_entries as $bp_entry){
            $avg_bp_high += $bp_entry->value;
            $avg_bp_low  += $bp_entry->value2;
        }
        $avg_bp_high = round($avg_bp_high/$bp_entries->count(),1);
        $avg_bp_low = round($avg_bp_low/$bp_entries->count(),1);
        // sports
        $sports_entries     = sportsentry::where('user_id',Auth::user()->id)->orderBy('id')->get();
        $running_distance   = 0;
        $calories           = 0;
        $running_time       = 0;
        foreach($sports_entries as $sports_entry){
            if($sports_entry->type == sportsentry::TYPE_RUN ){
                $running_distance += $sports_entry->value;
                $running_time += $sports_entry->last_time;
            }
            $calories += $sports_entry->calories;
        }
        $running_speed      = round($running_distance/$running_time * 3.6,2);
        return view('player.index',[
                                    // 'health_entries' => $health_entries
                                   'sports_entries' => $sports_entries
                                   ,'running_distance' => $running_distance
                                   ,'running_speed'  => $running_speed
                                   ,'calories'       => $calories
                                   ,'bad_sleep'      => $bad_sleep
                                   ,'mid_sleep'      => $mid_sleep
                                   ,'good_sleep'     => $good_sleep
                                   ,'avg_t'          => $avg_t
                                   ,'avg_hr'         => $avg_hr
                                   ,'avg_bp_high'    => $avg_bp_high
                                   ,'avg_bp_low'     => $avg_bp_low
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
