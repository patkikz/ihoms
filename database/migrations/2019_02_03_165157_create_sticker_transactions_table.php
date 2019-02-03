<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStickerTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticker_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_type');
            $table->string('plate_no');
            $table->integer('amount');
            $table->unsignedInteger('tenant_id');
            $table->unsignedInteger('sticker_id');

            $table->foreign('sticker_id')->references('id')->on('car_stickers')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
    
            $table->foreign('vehicle_type')->references('id')->on('vehicle_types')->onDelete('cascade');
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
        Schema::dropIfExists('sticker_transactions');
    }
}
