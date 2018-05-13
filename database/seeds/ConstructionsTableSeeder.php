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
        $construction = new Construction;
        $construction->city = '伊丹市';
        $construction->address = '千僧1丁目';
        $construction->personnel = '藤本';
        $construction->launch = true;
        $construction->roadworks_flg = true;
        $construction->inpuest_date = date('2017/11/20');
        $construction->u_requested_date = date('2017/11/25');
        $construction->d_requested_date = date('2017/11/25');
        $construction->u_occupancy_date = date('2017/12/25');
        $construction->d_occupancy_date = date('2017/12/25');
        $construction->u_permission_date = date('2018/01/07');
        $construction->d_permission_date = date('2018/01/07');
        $construction->u_roadworks_date = date('2018/01/17');
        $construction->d_roadworks_date = date('2018/01/17');
        $construction->u_inspected_date = date('2018/02/07');
        $construction->d_inspected_date = date('2018/02/07');
        $construction->u_picture_date = date('2018/02/17');
        $construction->d_picture_date = date('2018/02/17');
        $construction->demand = false;;
        $construction->save();
    }
}
