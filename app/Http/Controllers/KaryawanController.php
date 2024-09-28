<?php

namespace App\Http\Controllers;

use App\Models\Emplooye;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $key = $request->key;

        $karyawan = Emplooye::orderBy('nama');

        if ($key !=''){
            $karyawan->where('nama','like','%' . $key . '%');
        }
        $karyawan = $karyawan->get();

        return view('karyawan')
            ->with('data', $karyawan);
    }

    public function create()
    {
        return view('create_karyawan');
    }

    public function edit(Emplooye $karyawan)
    {
        return view('edit_karyawan')->with('karyawan', $karyawan);
    }

    public function simpanEdit1(Request $request)
    {
        //
        $karyawan = Emplooye::findOrfail($request->id);

        //
        $karyawan->update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'tpt_lahir'=>$request->tpt_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
        ]);

        return redirect()->route('karyawan');
    }


    public function simpanTambah1(Request $request)
    {
        Emplooye::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
            'tpt_lahir'=>$request->tpt_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
        ]);

        return redirect()->route('karyawan');
    }

    public function hapus(Request $request)
    {
        $karyawan=Emplooye::findOrfail($request->id);

        $karyawan->delete();

        return redirect()->route('karyawan');
    }
}
