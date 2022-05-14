<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->date('order date')->nullable();
            $table->date('return date')->nullable();
            $table->bigInteger('r_book_id')->unsigned();
            $table->foreign('r_book_id')->references('id')->on('books');
            $table->bigInteger('r_customer_id')->unsigned();
            $table->foreign('r_customer_id')->references('id')->on('customers');
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
};
