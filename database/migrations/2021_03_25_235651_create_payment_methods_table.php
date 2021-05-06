<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->text('description')->nullable();
            $table->text('icon')->nullable();
            $table->timestamps();
        });

        Schema::table('payments', function (Blueprint $table)
        {
            $table->foreignId('payment_method_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments',function (Blueprint $table)
        {
            $table->dropForeign(['payment_method_id']);
        });
        Schema::dropIfExists('payment_methods');
    }
}
