<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarStickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_stickers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tenant_id');
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('total_amount');
            $table->integer('tender');
            $table->integer('change');
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
        Schema::dropIfExists('car_stickers');
    }
}
