<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(Request $request)
    {
        if($request->menu == "beranda"){
            return view('beranda');
        }elseif ($request->menu == "produk") {
            return view('produk');
        }
        elseif ($request->menu == "karyawan") {
            return view('karyawan');
        }
        elseif ($request->menu == "supplier") {
            return view('supplier');
        }

        return "Menu Tidak Ditemukan";

    }
}
