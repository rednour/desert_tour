<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiemmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiemments', function (Blueprint $table) {
            $table->id();
            $table->date('date_paiement');
            $table->string('numero_carte');
            $table->string('type_paiement');
            $table->date('date_expiration');
            $table->integer('CIV');
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
        Schema::dropIfExists('paiemments');
    }
}
