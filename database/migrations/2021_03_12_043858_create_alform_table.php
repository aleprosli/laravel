<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alform', function (Blueprint $table) {
            $table->id();
            $table->string('reason')->nullable();
            $table->unsignedInteger('user_id');
            $table->dateTime('date_from')->nullable();
            $table->dateTime('date_to')->nullable();


            $table->timestamps();
        });

        Schema::table('alform', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alform');
    }
}
