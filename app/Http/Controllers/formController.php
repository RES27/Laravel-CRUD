<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class formController extends Controller
{
    public function getForm()
    {
        return view('form');
    }
    public function cafe(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kondisi' => 'required',
            'deskripsi' => 'required'
        ],
        [
            'name.required' => 'Nama Produk Wajib diisi.',
            'harga.required' => 'Harga Wajib diisi.',
            'stok.required' => 'Stok Wajib diisi.',
            'berat.required' => 'Berat Wajib diisi.',
            'gambar.required' => 'Gambar Wajib diisi.',
            'kondisi.required' => 'Kondisi Wajib diisi.',
            'deskripsi.required' => 'Deskripsi Wajib diisi.'
        ]


    );

        // if (!$req->filled('name')) {
        //     return redirect()->back()->with('error', 'Error. Field Nama Produk Wajib diisi.');
        // } else if (!$req->filled('berat')) {
        //     return redirect()->back()->with('error', 'Error. Field Berat Wajib diisi.');
        // } else if (!$req->filled('gambar')) {
        //     return redirect()->back()->with('error', 'Error. Field gambar Wajib diisi.');
        // } else if (!$req->filled('harga')) {
        //     return redirect()->back()->with('error', 'Error. Field Harga Wajib diisi.');
        // } else if (!$req->filled('stok')) {
        //     return redirect()->back()->with('error', 'Error. Field Stok Wajib diisi.');
        // } else if ($req->kondisi == 0) {
        //     return redirect()->back()->with('error', 'Error. Field Kondisi Wajib diisi.');
        // } else if (!$req->filled('deskripsi')) {
        //     return redirect()->back()->with('error', 'Error. Field Deskripsi Wajib diisi.');
        // }

        // $data = DB::table('product')->insert([
        //     'Nama' => $req->name,
        //     'Harga' => $req->harga,
        //     'stock' => $req->stok,
        //     'Berat' => $req->berat,
        //     'Gambar' => $req->gambar,
        //     'Kondisi' => $req->kondisi,
        //     'Deskripsi' => $req->deskripsi
        // ]);
        $data = new product();
        $data->Nama = $req->name;
        $data->Harga = $req->harga;
        $data->stock = $req->stok;
        $data->Berat = $req->berat;
        $data->Gambar = $req->gambar;
        $data->Kondisi = $req->kondisi;
        $data->Deskripsi = $req->deskripsi;
        $data->save();

        return redirect()->route('cafe')->with('success', 'Data Create successfully');
    }


}
