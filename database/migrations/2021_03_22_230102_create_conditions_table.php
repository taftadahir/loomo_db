<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    
        Schema::table('products', function (Blueprint $table)
        {
           $table->foreignId('condition_id')->constrained(); 
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
            $table->dropForeign(['condition_id']);
        });
        Schema::dropIfExists('conditions');
    }
}
