<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use App\Models\toko;

use Illuminate\Support\Facades\DB;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        return view('profil');
    }
    public function show()
    {
        // $user = DB::table('user')->get();
        $user = User::all();
        return view('profil', compact('user'));
        // dd($user->all());
    }



    public function idnama(){
        $user = DB::table('product')->where('id', 1)->first();
        return view('list-product1', compact('user'));
        // dd($user);
    }

}
