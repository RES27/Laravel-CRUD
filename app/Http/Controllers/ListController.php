<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ListController extends Controller
{

    // public function index()
    // {
    //     return view('list-product');
    // }

    public function show()
    {
        $list = Product::all();
        return view('list-product', compact('list'));
    }

    public function edit($id)
    {
        $list = Product::find($id);
        return view('edit', compact('list'));
        // dd($list->all());
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'name' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'gambar' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required'
        ]);
        $list = Product::find($id);
        $list->Nama = $req->name;
        $list->Harga = $req->harga;
        $list->stock = $req->stok;
        $list->Berat = $req->berat;
        $list->Gambar = $req->gambar;
        $list->Kondisi = $req->kondisi;
        $list->Deskripsi = $req->deskripsi;
        $list->save();
        return redirect('list')->with('success', 'Data Berhasil Ubah');
        // dd($list->all());
    }

    public function delete($id)
    {
        $list = Product::find($id);
        $list->delete();
        return redirect('list')->with('success', 'Data Berhasil Dihapus');
    }
}
