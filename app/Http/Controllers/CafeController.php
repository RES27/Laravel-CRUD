<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class CafeController extends Controller
{
    public function index (){
        $dabar = DB::table('product')->get();
        return view('cafe', compact('dabar'));
    }

    // public function show(Request $id )
    // {
    //     $list = Product::find($id);
    //     // $user = User::find($id);
    //     return view('list-product', compact('list'));
    // }

}
