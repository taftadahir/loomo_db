<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); 
            $table->foreignId('city_id')->constrained(); 
            $table->text('description')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });

        Schema::table('shippings', function (Blueprint $table)
        {
            $table->foreignId('address_id')->constrained(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shippings', function (Blueprint $table)
        {
            $table->dropForeign('shippings_address_id_foreign')->constrained(); 
        });
        Schema::dropIfExists('addresses');
    }
}
