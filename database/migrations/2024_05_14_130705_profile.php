<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('profile',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('Nama');
            $table->string('Email');
            $table->string('Jenis_Kelamin');
            $table->string('Alamat');

            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('profil');
    }
};
