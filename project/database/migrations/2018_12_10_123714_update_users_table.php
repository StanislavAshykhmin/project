<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('address')->default('null');
            $table->string('password')->default('null')->change();
            $table->string('photo')->default('null');
            $table->date('birthday');
            $table->date('death')->nullableDate();
            $table->string('sex');
            $table->integer('phone')->nullableInteger();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('address');
            $table->dropColumn('photo');
            $table->dropColumn('birthday');
            $table->dropColumn('death');
            $table->dropColumn('sex');
            $table->dropColumn('phone');
            $table->string('password')->change();
        });
    }
}
