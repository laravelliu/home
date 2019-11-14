<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->default(0)->comment('查询人ID');
            $table->string('number')->default('')->comment('身份证号码');
            $table->string('name')->default('')->comment('名字');
            $table->enum('sex',[1,2])->default(1)->comment('性别：（1：男，2：女）');
            $table->string('area')->default('')->comment('身份证所在地');
            $table->string('province')->default('')->comment('省');
            $table->string('city')->default('')->comment('城市');
            $table->string('prefecture')->default('')->comment('区县');
            $table->string('birthday')->default('')->comment('出生年月');
            $table->enum('status',[0, 1, 2])->default(0)->comment('状态（0：假身份证，1：真身份证，2：平台不存在）');
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
        Schema::dropIfExists('card_result');
    }
}
