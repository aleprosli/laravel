<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnCreatedByInMcformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mcform', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->after('id');
            $table->dateTime('date_from')->nullable()->after('reason');
            $table->dateTime('date_to')->nullable()->after('date_from');
            $table->unsignedInteger('created_by')->after('date_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mcform', function (Blueprint $table) {
            //
        });
    }
}
