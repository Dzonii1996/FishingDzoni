<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceEventsRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_events_relations', function (Blueprint $table) {
            $table->unsignedBigInteger('places_id');
            $table->unsignedBigInteger('events_id');
            $table->foreignId('place_id')->nullable()->constrained('places');
            $table->foreign('events_id')->references('id')->on('events');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_events_relations');
    }
}
