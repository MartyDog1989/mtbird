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
            $table->engine = 'InnoDB'; // ストレージエンジンの指定
            $table->increments('id');
            $table->string('city'); // 市町村
            $table->string('address'); // 住所
            $table->string('personnel'); // 担当者
            $table->boolean('launch')->default(false); // 受注
            $table->boolean('roadworks_flg')->default(false); // 道路工事フラグ
            $table->boolean('kobe_betterment_flg')->default(false); // 改善工事フラグ
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
