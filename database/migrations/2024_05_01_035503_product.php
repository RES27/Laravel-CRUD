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
        schema::create('product',function(Blueprint $table){
            $table->id();
            $table->string('Nama');
            $table->integer('Harga');
            $table->integer('stock');
            $table->float('Berat');
            $table->text('Gambar');
            $table->enum('Kondisi',['Baru','Bekas']);
            $table->text('Deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};