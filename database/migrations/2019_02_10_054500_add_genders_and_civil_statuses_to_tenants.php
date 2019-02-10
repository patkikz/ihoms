<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGendersAndCivilStatusesToTenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tenants', function (Blueprint $table) {
            $table->index('gender');
            $table->foreign('gender')->references('id')->on('genders')->onDelete('cascade');
            
            $table->index('civil_status');
            $table->foreign('civil_status')->references('id')->on('civil_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tenants', function (Blueprint $table) {
            //
        });
    }
}
