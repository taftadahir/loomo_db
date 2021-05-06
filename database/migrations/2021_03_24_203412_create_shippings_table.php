<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('description')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
        Schema::table('orders', function (Blueprint $table)
        {
            $table->foreignId('shipping_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            $table->dropForeign(['shipping_id']);
        });
        Schema::dropIfExists('shippings');
    }
}
