<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city'); // 市町村
            $table->string('address'); // 住所
            $table->string('personnel'); // 担当者
            $table->boolean('launch'); // 受注
            $table->boolean('roadworks_flg'); // 道路工事フラグ
            $table->date('inpuest_date')->nullable(); // 調査日
            $table->date('u_requested_date')->nullable(); // 上水申請日
            $table->date('d_requested_date')->nullable(); // 下水申請日
            $table->date('u_occupancy_date')->nullable(); // 上水道路占用申請日
            $table->date('d_occupancy_date')->nullable(); // 下水道路占用申請日
            $table->date('u_permission_date')->nullable(); // 上水道路使用申請日
            $table->date('d_permission_date')->nullable(); // 下水道路占用申請日
            $table->date('u_roadworks_date')->nullable(); // 上水工事日
            $table->date('d_roadworks_date')->nullable(); // 下水工事日
            $table->date('u_inspected_date')->nullable(); // 上水検査日
            $table->date('d_inspected_date')->nullable(); // 下水検査日
            $table->date('u_picture_date')->nullable(); // 上水写真提出日
            $table->date('d_picture_date')->nullable(); // 下水写真提出日
            $table->boolean('demand')->default(0); // 請求
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
        Schema::dropIfExists('constructions');
    }
}
