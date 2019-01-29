<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('province');
            $table->string('block');
            $table->string('lot');
            $table->string('street');
            $table->enum('payment_mode' ,[1,0])->default(0);
            $table->enum('withParking' ,[1,0])->default(0);
            $table->timestamps();
            $table->unsignedInteger('owner_id');

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
