<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nif')->unique()->after('id');
            $table->string('surname')->after('name');
            $table->date('birthday')->after('password');
            $table->integer('phone')->nullable()->after('birthday');
            $table->boolean('premium')->after('phone');
            $table->foreignId('direction_id')->constrained()->after('premium');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nif');
            $table->dropColumn('surname');
            $table->dropColumn('birthday');
            $table->dropColumn('phone');
            $table->dropColumn('premium');
            $table->dropColumn('user_direction_list_id');
        });
    }
}
