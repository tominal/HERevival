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
            $table->integer('user_id')->nullable(); // a user can have many servers
            $table->string('name');

            /**
             * Default server specifications:
             * - 500 MHz CPU        processor
             * - 100 Mb HDD         hard drive
             * - 256 MB             memory
             * - 1 Mbit             network (Mbps)
             */
            $table->integer('cpu')->default(500);
            $table->integer('hdd')->default(100);
            $table->integer('ram')->default(256);
            $table->integer('network')->default(1);

            /**
             * NPC Server
             * If this server belongs to an NPC, it behaves differently.
             * For example, banks, government agencies, etc.
             */
            $table->integer('npc_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('npc_id')->references('id')->on('npcs');
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
