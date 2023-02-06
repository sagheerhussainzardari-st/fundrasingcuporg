<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->string('stripe_id');
            $table->string('amount');
            $table->string('balance_transaction');
            $table->string('currency');
            $table->string('description');
            $table->string('payment_id');
            $table->string('country');
            $table->string('exp_month');
            $table->string('exp_year');
            $table->string('fingerprint');
            $table->integer('card_number');
            $table->string('receipt_url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
