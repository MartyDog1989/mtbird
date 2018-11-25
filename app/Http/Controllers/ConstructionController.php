<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Construction;
use App\Http\ProgressController;
use App\Http\Requests\StoreConstructionPost;

class ConstructionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $constructions = DB::table('constructions')
                         ->leftJoin('progresses',
                                    'progresses.construction_id', '=', 'constructions.id')
                         ->orderBy('constructions.id', 'desc')
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
    public function store(StoreConstructionPost $request)
    {
        $construction = new Construction;
        $construction->city = $request->city;
        $construction->address = $request->address;
        $construction->personnel = $request->personnel;
        $construction->launch = $request->launch;
        $construction->roadworks_flg = $request->roadworks_flg;
        $construction->save();

        return view('progress.create', ['construction' => $construction]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $construction = Construction::where('constructions.id', $id)
                        ->join('progresses',
                               'constructions.id',
                               '=',
                               'progresses.construction_id')
                        ->first();
        logger($construction);
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
    public function update(StoreConstructionPost $request, $id)
    {
        $construction = Construction::find($request->id);
        $construction->city = $request->city;
        $construction->address = $request->address;
        $construction->personnel = $request->personnel;
        $construction->launch = $request->launch;
        $construction->roadworks_flg = $request->roadworks_flg;
        if ($request->city == array_keys(config('const.city_code'), '神戸市')[0]) {
            $construction->kobe_betterment_flg = $request->kobe_betterment_flg;
        }
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
    
    /**
     * 道路工事現場を表示する
     * 
     * @return \Illuminate\Http\Response
     */
    public function roadworksList(Request $request)
    {
        $constructions = Construction::getListByRoadworks($request->roadworks_flg);
        return view('construction.index', ['constructions' => $constructions]);
    }
}
