<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('number')->nullable()->unique();
            $table->string('label');
            $table->string('symbol');
            $table->boolean('spaced')->default(true)->nullable();
            $table->boolean('enabled')->default(true);
            $table->text('description')->nullable();
            $table->enum('symbol_position', ['left', 'right'])->default('right');
            $table->enum('fractional_separator', [',', '.'])->default(',');
            $table->enum('thousand_separator', [',', '.'])->default('.');
            $table->double('exchange_rate', 8, 2)->default(1.00);
            $table->timestamps();
        });

        Schema::table('prices', function (Blueprint $table)
        {
            $table->foreignId('currency_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prices', function (Blueprint $table)
        {
           $table->dropForeign(['currency_id']);
        });
        Schema::dropIfExists('currencies');
    }
}
