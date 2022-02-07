<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string('door');
            $table->string('direction');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->integer('cp');
            $table->integer('phone');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_direction_lists');
    }
}
