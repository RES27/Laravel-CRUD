<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    use HasFactory;
    protected $table = 'toko';
    protected $fillable = ['Nama_Toko', 'Rating', 'produk_terbaik', 'Deskripsi_Toko'];
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
