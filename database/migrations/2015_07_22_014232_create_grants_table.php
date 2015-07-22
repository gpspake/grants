<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('maker');
            $table->string('maker_website');
            $table->string('program');
            $table->string('program_website');
            $table->text('description');
            $table->decimal('maximum_award',10,2)->index();
            $table->dateTime('letter_of_intent_deadline')->index();
            $table->dateTime('limited_submission_deadline');
            $table->boolean('status_open');
            $table->timestamp('published_at')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grants');
    }
}
