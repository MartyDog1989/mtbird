<?php

use Illuminate\Database\Seeder;
use Illuminate\Datebase\Eloquent\Model;
use App\Construction;

class ConstructionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $construction = new Construction;
        $construction->city = '伊丹市';
        $construction->address = '千僧1丁目';
        $construction->personnel = '藤本';
        $construction->launch = true;
        $construction->roadworks_flg = true;
        $construction->progress_id = 1;
        $construction->save();
    }
}
