<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('story');
            $table->string('director');
            $table->string('starring');
            $table->time('time');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('img_pass');
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
        Schema::dropIfExists('movies');
    }
}
