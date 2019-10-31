<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->integer('internet');
            $table->integer('memory');
            $table->integer('processor');
            $table->integer('hdd_size');

            $table->boolean('is_npc');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('servers');
    }
}
