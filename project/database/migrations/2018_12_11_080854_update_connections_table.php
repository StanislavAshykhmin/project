<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('friend_user', function (Blueprint $table) {
            $table->integer('friend_id')->unsigned();
            $table->foreign('friend_id')->references('id')->on('friends');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('friend_user', function (Blueprint $table) {
            $table->dropColumn('friend_id');
        });
    }
}
