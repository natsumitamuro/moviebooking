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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('password');
            $table->integer('classification')->nullable()->unsigned()->comment('区分 0:大人 1: 大学生/専門学生 2: 中学生以下');
            $table->integer('gender')->unsigned()->nullable()->comment('性別 0:男性 1:女性');
            $table->integer('status')->unsigned()->nullable()->comment('会員登録ステータス 0: active" 1: deleted');
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
