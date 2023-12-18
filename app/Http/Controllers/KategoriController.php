<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Sayur;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $ktgr = Kategori::all();
        return response()->json(['data' => $ktgr]);
    }

    public function datasimpan(Request $request){
        $request->validate([
            'nama' => 'required|string',
        ]);

        $ktgr = new Kategori;
        $ktgr->nama = $request->input('nama');
        $ktgr->save();

        return response()->json(['message' => 'Barang berhasil ditambahkan'], 201);
    }


}
