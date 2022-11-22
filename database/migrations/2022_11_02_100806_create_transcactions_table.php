<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->int('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('account');
            $table->int('points');
            $table->int('waste_item')->unsigned();
            $table->foreign('waste_item')->references('item_id')->on('waste');
            $table->string('session_id');
            $table->foreign('session_id')->references('session_id')->on('sessions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transcactions');
    }
};
