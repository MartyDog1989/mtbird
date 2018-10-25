<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Construction extends Model
{
    public static function getListByCity($city)
    {
        // $constructions = Self::where('city', $city)
        //                  ->orderBy('id', 'desc')
        //                  ->paginate(config('const.pages'));
        $constructions = DB::table('constructions')
                         ->leftJoin('progresses',
                                    'progresses.construction_id', '=', 'constructions.id')
                         ->where('constructions.city', $city)
                         ->orderBy('constructions.id', 'desc')
                         ->paginate(config('const.pages')); // 定数

        return $constructions;
    }

    public static function getListByLaunch($launch)
    {
        // $constructions = Self::where('launch', $launch)
        //                  ->orderBy('id', 'desc')
        //                  ->paginate(config('const.pages'));
        $constructions = DB::table('constructions')
                         ->leftJoin('progresses',
                                    'progresses.construction_id', '=', 'constructions.id')
                         ->where('constructions.launch', $launch)
                         ->orderBy('constructions.id', 'desc')
                         ->paginate(config('const.pages')); // 定数

        return $constructions;
    }

    public static function getListByRoadworks($roadworks_flg)
    {
        $constructions = DB::table('constructions')
                         ->leftJoin('progresses',
                                    'progresses.construction_id', '=', 'constructions.id')
                         ->where('constructions.roadworks_flg', $roadworks_flg)
                         ->orderBy('constructions.id', 'desc')
                         ->paginate(config('const.pages')); // 定数

        return $constructions;
    }
}
