<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrearTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrear_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('month');
            $table->integer('amountToPay');
            $table->integer('actualAmountPaid');
            $table->unsignedInteger('tenant_id');
            $table->unsignedInteger('arrear_payment_id');
            $table->timestamps();

            $table->foreign('month')->references('id')->on('months')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->foreign('arrear_payment_id')->references('id')->on('arrear_payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrear_transactions');
    }
}
