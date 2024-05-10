<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profil;
use App\Models\toko;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        return view('profil');
    }
    public function show($id = 1)
    {
        $user = User::findOrFail($id);
        // dd($user);
        $list = Profil::where('user_id', $user->id)->get();
        $listed = Toko::where('user_id', $user->id)->get();
        return view('profil', compact('user','list','listed'));
    }
    public function id($id = 2)
    {
        $user = User::findOrFail($id);
        // dd($user);
        $list = Profil::where('user_id', $user->id)->get();
        $listed = Toko::where('user_id', $user->id)->get();
        return view('profil2', compact('user','list','listed'));
    }



    // public function idnama(){
    //     $user = DB::table('product')->where('id', 1)->first();
    //     return view('list-product1', compact('user'));
    //     // dd($user);
    // }

}
