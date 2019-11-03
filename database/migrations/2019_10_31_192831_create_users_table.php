<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('game_password')->nullable();

            $table->ipAddress('ip_address');
            $table->ipAddress('game_address')->unique();

            $table->boolean('is_admin')->default(0);

            $table->integer('learning_step')->default(1)->nullable();

            $table->longText('webserver')->nullable()->default(null);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}
