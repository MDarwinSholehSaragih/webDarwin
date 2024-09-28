<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $key = $request->key;

        $supplier = Supplier::orderBy('nama');

        if ($key !=''){
            $supplier->where('nama','like','%' . $key . '%');
        }
        $supplier = $supplier->get();

        return view('supplier')
        ->with('data', $supplier);
    }

    public function create()
    {
        return view('create_supplier');
    }

    public function edit(Supplier $supplier)
    {
        return view('edit_supplier')
            ->with('supplier' , $supplier);
    }

    public function simpanEdit2(Request $request)
    {
        //
        $supplier = Supplier::findOrfail($request->id);

        //
        $supplier->update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
        ]);

        return redirect()->route('supplier');
    }

    public function simpanTambah2(Request $request)
    {
        Supplier::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
        ]);

        return redirect()->route('supplier');
    }

    public function hapus(Request $request)
    {
        $supplier=Supplier::findOrfail($request->id);

        $supplier->delete();

        return redirect()->route('supplier');
    }
}
