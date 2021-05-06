<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsletterTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletter_topics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });
        Schema::table('newsletters', function (Blueprint $table)
        {
            $table->foreignId('newsletter_topic_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newsletters',function (Blueprint $table)
        {
            $table->dropForeign(['newsletter_topic_id']);
        });
        Schema::dropIfExists('newsletter_topics');
    }
}
