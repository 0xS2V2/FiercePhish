<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosted_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('local_path');
            $table->string('route');
            $table->string('original_file_name');
            $table->string('file_name');
            $table->string('file_mime');
            $table->tinyInteger('action')->default(0);
            $table->integer('kill_switch')->nullable();
            $table->string('uidvar')->nullable();
            $table->tinyInteger('invalid_action')->default(50);
            $table->boolean('notify_access')->default(false);
            $table->integer('hosted_site_id')->nullable();
            $table->timestamps();
            $table->index(['route', 'file_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosted_files');
    }
}
