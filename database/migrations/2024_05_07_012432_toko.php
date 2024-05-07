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
        schema::create('toko',function(Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('profil_id');
            $table->string('Nama_Toko');
            $table->integer('Rating');
            $table->string('produk_terbaik');
            $table->text('Deskripsi_Toko');

            $table->foreign('profil_id')->references('id')->on('profil');
            $table->foreign('user_id')->references('id')->on('users');




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('toko');
    }
};
