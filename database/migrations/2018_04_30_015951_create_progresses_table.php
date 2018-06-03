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
            $table->engine = 'InnoDB'; // ストレージエンジンの指定
            $table->increments('id');
            $table->integer('construction_id')->unsigned();
            // $table->foreign('construction_id')->references('id')->on('constructions');
            $table->date('inquest_date')->nullable(); // 調査日
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
            $table->date('kobe_inquest_req_date')->nullable(); // 神戸調査依頼提出日
            $table->integer('kobe_bonus')->nullable(); // 神戸補助金額
            $table->date('kobe_better_req_date')->nullable(); // 神戸改善工事申請提出日
            $table->date('kobe_pic_date')->nullable(); // 神戸改善工事完了届提出日
            $table->date('kobe_demand_date')->nullable(); // 神戸改善工事請求書提出日
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
        Schema::dropIfExists('progresses');
    }
}
