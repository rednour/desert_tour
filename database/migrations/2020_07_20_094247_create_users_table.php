<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('pays');
            $table->string('ville'); 
            $table->string('sexe');
            $table->string('telephone');
            $table->string('photo_profile')->nullable();
            $table->string('type_user');
            $table->string('email')->unique();
            $table->date('date_birth');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
           // $table->boolean('active');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
