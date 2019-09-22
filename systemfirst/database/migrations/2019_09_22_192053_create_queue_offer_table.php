<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueueOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queue_offer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('queue_id');
            $table->unsignedBigInteger('offer_id');
            $table->foreign('queue_id')->references('id')->on('queues');
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queue_offer');
    }
}
