<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('concert_places_id')->references('id')->on('events');
            $table->foreign('payment_id')->references('id')->on('user_payments');

        });
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('place_id')->references('id')->on('places');
            $table->foreign('concert_id')->references('id')->on('concerts');
        });
        Schema::table('user_payments', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_concert_places_id_foreign');
            $table->dropForeign('orders_payment_id_foreign');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_place_id_foreign');
            $table->dropForeign('events_concert_id_foreign');
        });
        Schema::table('user_payments', function (Blueprint $table) {
            $table->dropForeign('user_payments_user_id_foreign');
        });
    }
}
