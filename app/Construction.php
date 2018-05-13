<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Construction extends Model
{
    public static function getListByCity($city)
    {
        $constructions = Self::where('city', $city)
                         ->orderBy('id', 'desc')
                         ->paginate(config('const.pages'));

        return $constructions;
    }

    public static function getListByLaunch($launch)
    {
        $constructions = Self::where('launch', $launch)
                         ->orderBy('id', 'desc')
                         ->paginate(config('const.pages'));

        return $constructions;
    }
}
