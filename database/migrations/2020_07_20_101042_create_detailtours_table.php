<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtours', function (Blueprint $table) {
            $table->id();
            $table->string('hotel');
            $table->string('propos');
            $table->integer('prixadulte');
            $table->integer('prixenfant');
            $table->timestamps();
            $table->foreignId('tour_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtours');
    }
}
