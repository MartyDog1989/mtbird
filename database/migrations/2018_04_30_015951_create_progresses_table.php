<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('inpuest_date'); // 調査日
            $table->date('u_requested_date'); // 上水申請日
            $table->date('d_requested_date'); // 下水申請日
            $table->date('u_occupancy_date'); // 上水道路占用申請日
            $table->date('d_occupancy_date'); // 下水道路占用申請日
            $table->date('u_permission_date'); // 上水道路使用申請日
            $table->date('d_permission_date'); // 下水道路占用申請日
            $table->date('u_roadworks_date'); // 上水工事日
            $table->date('d_roadworks_date'); // 下水工事日
            $table->date('u_inspected_date'); // 上水検査日
            $table->date('d_inspected_date'); // 下水検査日
            $table->date('u_picture_date'); // 上水写真提出日
            $table->date('d_picture_date'); // 下水写真提出日
            $table->boolean('demand'); // 請求
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progresses');
    }
}
