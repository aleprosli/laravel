<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcform', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('reason')->nullable();
            $table->timestamps();

            // $table->foreign('typeofleaves_id')->references('id')->on('typeofleaves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mcform');
    }
}
