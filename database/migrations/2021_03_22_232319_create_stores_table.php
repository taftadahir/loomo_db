<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('cover')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('enabled')->default(true);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    
        Schema::table('products', function (Blueprint $table)
        {
           $table->foreignId('store_id')->constrained(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table)
        {
            $table->dropForeign(['store_id']);
        });
        Schema::dropIfExists('stores');
    }
}
