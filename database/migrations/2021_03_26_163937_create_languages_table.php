<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('code')->unique();
            $table->enum('directionality', ['ltr', 'rtl'])->default('ltr');
            $table->boolean('enabled')->default(true);
            $table->timestamps();
        });

        Schema::table('translations', function (Blueprint $table)
        {
            $table->unique(['table_name', 'column_name', 'language_id', 'translate_able_id', 'translate_able_type'], 'tcltt_uid');
            // $table->renameIndex('translations_table_name_column_name_language_id_translate_able_id_translate_able_type_unique', 'tcltt_uid');
            $table->foreignId('language_id')->constrained()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('translations', function (Blueprint $table)
        {
            $table->dropUnique('tcltt_uid');
            $table->dropForeign('translations_language_id_foreign');
        });
        Schema::dropIfExists('languages');
    }
}
