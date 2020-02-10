<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MusicTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_types', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('music_types', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('music_types');
        });

        Schema::table('concerts', function (Blueprint $table) {
            $table->foreign('music_type_id')->references('id')->on('music_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('music_types', function (Blueprint $table) {
            $table->dropForeign('music_types_parent_id_foreign');
        });

        Schema::table('concerts', function (Blueprint $table) {
            $table->dropForeign('concerts_music_type_id_foreign');
        });

        Schema::dropIfExists('music_types');
    }
}
