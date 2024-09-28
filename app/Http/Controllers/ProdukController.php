<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        //
        $key = $request->key;

        //ambil data dari table produk
        $produk = Product::orderBy('nama');

        //
        if ($key !=''){
            $produk->where('nama','like','%' . $key . '%');
        }
        $produk = $produk->get();

        //1. eloquent 2. query builder

        return view('produk')
            ->with('data', $produk);
    }

    public function create()
    {
        return view('create_produk');
    }

    public function edit(Product $produk)
    {
        return view('edit_produk')
            ->with('produk', $produk);
    }

    public function simpanEdit(Request $request)
    {
        //
        $produk = Product::findOrfail($request->id);

        //
        $produk->update([
            'nama'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
        ]);

        return redirect()->route('produk');
    }

    public function simpanTambah(Request $request)
    {
        Product::create([
            'nama'=>$request->nama,
            'harga_beli'=>$request->harga_beli,
            'harga_jual'=>$request->harga_jual,
        ]);

        return redirect()->route('produk');
    }

    public function hapus(Request $request)
    {
        $produk=Product::findOrfail($request->id);

        $produk->delete();

        return redirect()->route('produk');
    }
}
