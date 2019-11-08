<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->comment('邮箱')->unique();
            $table->string('password')->comment('密码');
            $table->timestamp('email_verified_at')->comment('验证邮箱时间')->nullable();
            $table->string('name')->default('')->comment('姓名');
            $table->string('photo')->default('')->comment('头像');
            $table->string('phone')->default('')->comment('电话');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
