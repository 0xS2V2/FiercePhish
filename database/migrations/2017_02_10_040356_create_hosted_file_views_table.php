<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostedFileViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosted_file_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hosted_file_id')->index();
            $table->string('ip')->index();
            $table->string('referer')->nullable();
            $table->string('useragent')->nullable();
            $table->string('browser');
            $table->string('browser_version');
            $table->string('browser_maker');
            $table->string('platform');
            $table->string('uuid')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosted_file_views');
    }
}
