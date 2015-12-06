<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Redirect, Gate;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('adminAuthed',Auth::user())){
            $doctors = User::where('type',User::TYPE_DOCTOR)->get();
            $coachs = User::where('type',User::TYPE_COACH)->get();
            $users  = User::where('type',User::TYPE_PLAYER)->get();
            return view('admin.admin',[
                'doctors'   =>  $doctors,
                'coachs'    =>  $coachs,
                'users'     =>  $users
            ]);
        }else{
            return 'Sorry, You Are Not Authorized To See This Page';
        }
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
    
    public function getDoctor(){
        return view('admin.doctor_create');
    }
    
    public function getCoach(){
        return view('admin.coach_create');
    }
}
