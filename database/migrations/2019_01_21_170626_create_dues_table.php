<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tenant_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->integer('total_amount');
            $table->integer('tender');
            $table->integer('change');
            $table->timestamps();

            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dues');
    }
}
