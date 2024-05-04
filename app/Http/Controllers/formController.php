<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{
    public function getForm()
    {
        return view('form');
    }
    public function cafe(Request $req)
    {

        if (!$req->filled('name')) {
            return redirect()->back()->with('error', 'Error. Field Nama Produk Wajib diisi.');
        } else if (!$req->filled('berat')) {
            return redirect()->back()->with('error', 'Error. Field Berat Wajib diisi.');
        } else if (!$req->filled('gambar')) {
            return redirect()->back()->with('error', 'Error. Field gambar Wajib diisi.');
        } else if (!$req->filled('harga')) {
            return redirect()->back()->with('error', 'Error. Field Harga Wajib diisi.');
        } else if (!$req->filled('stok')) {
            return redirect()->back()->with('error', 'Error. Field Stok Wajib diisi.');
        } else if ($req->kondisi == 0) {
            return redirect()->back()->with('error', 'Error. Field Kondisi Wajib diisi.');
        } else if (!$req->filled('deskripsi')) {
            return redirect()->back()->with('error', 'Error. Field Deskripsi Wajib diisi.');
        }

        $data = DB::table('product')->insert([
            'Nama' => $req->name,
            'Harga' => $req->harga,
            'stock' => $req->stok,
            'Berat' => $req->berat,
            'Gambar' => $req->gambar,
            'Kondisi' => $req->kondisi,
            'Deskripsi' => $req->deskripsi
        ]);

        return redirect('cafe');
    }


}
