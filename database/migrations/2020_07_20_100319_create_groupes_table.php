<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre_adulte')->nullable();
            $table->string('nombre_enfant')->nullable();
            $table->date('date_creation');
            $table->integer('prix_par_personne')->nullable();
            $table->string('reduction');
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
        Schema::dropIfExists('groupes');
    }
}
