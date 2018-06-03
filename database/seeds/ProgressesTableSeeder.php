<?php

use Illuminate\Database\Seeder;
use Illuminate\Datebase\Eloquent\Model;
use App\Progress;

class ProgressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $progress = new Progress;
        $progress->construction_id = 1;
        $progress->inquest_date = date('2017/11/20');
        $progress->u_requested_date = date('2017/11/25');
        $progress->d_requested_date = date('2017/11/25');
        $progress->u_occupancy_date = date('2017/12/25');
        $progress->d_occupancy_date = date('2017/12/25');
        $progress->u_permission_date = date('2018/01/07');
        $progress->d_permission_date = date('2018/01/07');
        $progress->u_roadworks_date = date('2018/01/17');
        $progress->d_roadworks_date = date('2018/01/17');
        $progress->u_inspected_date = date('2018/02/07');
        $progress->d_inspected_date = date('2018/02/07');
        $progress->u_picture_date = date('2018/02/17');
        $progress->d_picture_date = date('2018/02/17');
        $progress->demand = false;
        $progress->save();
    }
}
