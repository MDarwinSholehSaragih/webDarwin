<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function produk()
    {
        return view('produk');
    }

    public function karyawan()
    {
        return view('karyawan');
    }

    public function supplier()
    {
        return view('supplier');
    }
}
