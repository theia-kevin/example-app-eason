<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTables extends Migration
{
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('header_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'header');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('header_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'header');
        });

        Schema::create('header_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('header_revisions');
        Schema::dropIfExists('header_translations');
        Schema::dropIfExists('header_slugs');
        Schema::dropIfExists('headers');
    }
}
