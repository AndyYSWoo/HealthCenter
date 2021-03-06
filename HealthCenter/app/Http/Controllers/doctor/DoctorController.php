<?php

namespace App\Http\Controllers\doctor;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\player_has_doctor;
use App\calendarevent;
use App\User;
use Auth;
use Redirect;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Clients
        $clients = player_has_doctor::where('doctor_id',Auth::user()->id)
                                        ->where('status',player_has_doctor::STATUS_ACCEPTED)
                                        ->get();
        $requests = player_has_doctor::where('doctor_id',Auth::user()->id)
                                        ->where('status',player_has_doctor::STATUS_PENDING)
                                        ->get();
        // Calendar
        $cal_events = calendarevent::where('doctor_id',Auth::user()->id)
                                    ->where('type',calendarevent::TYPE_SHORT)
                                    ->where('status','<>',calendarevent::STATUS_PENDING)
                                    ->get();
        $event_requests = calendarevent::where('doctor_id', Auth::user()->id)
                                    ->where('type',calendarevent::TYPE_SHORT)
                                    ->where('status',calendarevent::STATUS_PENDING)
                                    ->get();
        return view('doctor.doctor_home',[
                                          'clients' => $clients
                                         ,'requests'=> $requests
                                         ,'cal_events'  => $cal_events
                                         ,'event_requests' => $event_requests
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
