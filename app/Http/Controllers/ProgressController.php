<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Progress;
use App\Construction;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $progress = new Progress;
        $progress->construction_id = $request->construction_id;
        $progress->inquest_date = $request->inquest_date;
        $progress->u_requested_date = $request->u_requested_date;
        $progress->d_requested_date = $request->d_requested_date;
        $progress->u_occupancy_date = $request->u_occupancy_date;
        $progress->d_occupancy_date = $request->d_occupancy_date;
        $progress->u_permission_date = $request->u_permission_date;
        $progress->d_permission_date = $request->d_permission_date;
        $progress->u_roadworks_date = $request->u_roadworks_date;
        $progress->d_roadworks_date = $request->d_roadworks_date;
        $progress->u_inspected_date = $request->u_inspected_date;
        $progress->d_inspected_date = $request->d_inspected_date;
        $progress->u_picture_date = $request->u_picture_date;
        $progress->d_picture_date = $request->d_picture_date;
        $progress->kobe_inquest_req_date = $request->kobe_inquest_req_date;
        $progress->kobe_bonus = $request->kobe_bonus;
        $progress->kobe_better_req_date = $request->kobe_better_req_date;
        $progress->kobe_pic_date = $request->kobe_pic_date;
        $progress->kobe_demand_date = $request->kobe_demand_date;
        $progress->demand = $request->demand_flg;
        $progress->save(); 

        return view('progress.store');
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
        $progress = Progress::where('construction_id', '=', $id)
                              ->first();
        $construction = Construction::find($id);
        logger($construction);
        logger($progress);
        return view('progress.edit', ['progress' => $progress,
                                      'construction' => $construction]);
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
        $progress = Progress::find($request->id);
        $progress->inquest_date = $request->inquest_date;
        $progress->u_requested_date = $request->u_requested_date;
        $progress->d_requested_date = $request->d_requested_date;
        $progress->u_occupancy_date = $request->u_occupancy_date;
        $progress->d_occupancy_date = $request->d_occupancy_date;
        $progress->u_permission_date = $request->u_permission_date;
        $progress->d_permission_date = $request->d_permission_date;
        $progress->u_roadworks_date = $request->u_roadworks_date;
        $progress->d_roadworks_date = $request->d_roadworks_date;
        $progress->u_inspected_date = $request->u_inspected_date;
        $progress->d_inspected_date = $request->d_inspected_date;
        $progress->u_picture_date = $request->u_picture_date;
        $progress->d_picture_date = $request->d_picture_date;
        $progress->kobe_inquest_req_date = $request->kobe_inquest_req_date;
        $progress->kobe_bonus = $request->kobe_bonus;
        $progress->kobe_better_req_date = $request->kobe_better_req_date;
        $progress->kobe_pic_date = $request->kobe_pic_date;
        $progress->kobe_demand_date = $request->kobe_demand_date;
        $progress->demand = $request->demand_flg;
        $progress->save(); 

        return view('progress.update');
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
