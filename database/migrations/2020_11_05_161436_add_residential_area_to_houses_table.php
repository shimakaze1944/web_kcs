<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResidentialAreaToHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lagus', function (Blueprint $table) {
            $table->unsignedBigInteger('residential_area')->index()->after('tanggal_rilis')->nullable();

            $table->foreign('residential_area')->references('id')->on('penyanyis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lagus', function (Blueprint $table) {
            $table->dropColumn('residential_area');
        });
    }
}
