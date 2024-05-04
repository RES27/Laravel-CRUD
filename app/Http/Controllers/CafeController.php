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
}
