<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Construction;

class ConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constructions = DB::table('constructions')
                         ->orderBy('id', 'desc')
                         ->paginate(config('const.pages')); // 定数

        return view('construction.index', ['constructions' => $constructions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('construction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $construction = new Construction;
        $construction->city = $request->city;
        $construction->address = $request->address;
        $construction->personnel = $request->personnel;
        $construction->launch = $request->launch;
        $construction->roadworks_flg = $request->roadworks_flg;
        $construction->save();

        return view('construction.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $construction = Construction::find($id);
        return view('construction.show', ['construction' => $construction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $construction = Construction::find($id);
        return view('construction.edit', ['construction' => $construction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFundamental(Request $request, $id)
    {
        $construction = Construction::find($request->id);
        $construction->city = $request->city;
        $construction->address = $request->address;
        $construction->personnel = $request->personnel;
        $construction->launch = $request->launch;
        $construction->roadworks_flg = $request->roadworks_flg;
        if ($request->city == '神戸市') {
            $construction->kobe_betterment_flg = $request->kobe_betterment_flg;
        }
        $construction->save();   

        return view('construction.update');
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
        $construction = Construction::find($request->id);
        $construction->inpuest_date = $request->inpuest_date;
        $construction->u_requested_date = $request->u_requested_date;
        $construction->d_requested_date = $request->d_requested_date;
        $construction->u_occupancy_date = $request->u_occupancy_date;
        $construction->d_occupancy_date = $request->d_occupancy_date;
        $construction->u_permission_date = $request->u_permission_date;
        $construction->d_permission_date = $request->d_permission_date;
        $construction->u_roadworks_date = $request->u_roadworks_date;
        $construction->d_roadworks_date = $request->d_roadworks_date;
        $construction->u_inspected_date = $request->u_inspected_date;
        $construction->d_inspected_date = $request->d_inspected_date;
        $construction->u_picture_date = $request->u_picture_date;
        $construction->d_picture_date = $request->d_picture_date;
        $construction->kobe_inquest_req_date = $request->kobe_inquest_req_date;
        $construction->kobe_bonus = $request->kobe_bonus;
        $construction->kobe_better_req_date = $request->kobe_better_req_date;
        $construction->kobe_pic_date = $request->kobe_pic_date;
        $construction->kobe_demand_date = $request->kobe_demand_date;
        $construction->demand = $request->demand_flg;
        $construction->save();   

        return view('construction.update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $construction = Construction::find($id);
        $construction->delete();
        return view('construction.destroy');
    }

    /**
     * 市町村ごとに表示する
     * 
     * @param str $city
     * @return \Illuminate\Http\Response
     */
    public function cityList(Request $request)
    {
        $constructions = Construction::getListByCity($request->city);
        return view('construction.index', ['constructions' => $constructions]);
    }
    
    /**
     * 受注現場を表示する
     * 
     * @return \Illuminate\Http\Response
     */
    public function launchList(Request $request)
    {
        $constructions = Construction::getListByLaunch($request->launch);
        return view('construction.index', ['constructions' => $constructions]);
    }
}
