<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestructureGrantsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('grants', function (Blueprint $table) {
            $table->string('subtitle')->after('title');
            $table->renameColumn('description', 'description_raw');
            $table->text('description_html')->after('description');
            $table->string('meta_description')->after('description_html');
            $table->boolean('is_draft')->after('meta_description');
            $table->string('layout')->after('is_draft')
                ->default('grants.layouts.grant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('grants', function (Blueprint $table) {
            $table->dropColumn('layout');
            $table->dropColumn('is_draft');
            $table->dropColumn('meta_description');
            $table->dropColumn('description_html');
            $table->renameColumn('description_raw', 'description');
            $table->dropColumn('subtitle');
        });
    }
}
