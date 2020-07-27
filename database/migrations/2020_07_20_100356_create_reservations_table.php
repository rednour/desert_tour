<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre_place');
            $table->date('date_reservation');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('tour_id')->constrained();
            $table->foreignId('groupe_id')->constrained();
            $table->foreignId('billet_id')->constrained();
            $table->foreignId('paiemment_id')->constrained();
            $table->foreignId('invite_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
