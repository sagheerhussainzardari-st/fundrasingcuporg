<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->integer('user_id')->nullable();
            $table->integer('fund_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('zipcode');
            $table->text('description');
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->enum('payment_status',['Paid', 'Unpaid']);
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
        Schema::dropIfExists('orders');
    }
}
