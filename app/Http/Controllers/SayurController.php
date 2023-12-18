<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use Illuminate\Http\Request;

class SayurController extends Controller
{
    public function index(){
        $sayur = Sayur::all();
        return response()->json(['data' => $sayur]);
    }

    public function show(Request $request){
        $request->validate([
            'id_kategori'=>'required|integer',
            'nama' => 'required|string|max:255',
            'bibit' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'penyakit' => 'required|string|max:255',
            'perawatan' => 'required|string|max:255',
        ]);

        $sayur = new Sayur;
        $sayur->id_kategori = $request->input('id_kategori');
        $sayur->nama = $request->input('nama');
        $sayur->bibit = $request->input('bibit');
        $sayur->deskripsi = $request->input('deskripsi');
        $sayur->penyakit = $request->input('penyakit');
        $sayur->perawatan = $request->input('perawatan');
        $sayur->save();

        return response()->json(['message' => 'Data sayur berhasil ditambahkan'], 201);
    }
    public function getSayurByIdKategori($id_kategori)
    {
        $sayur = Sayur::where('id_kategori', $id_kategori)->get();
        return response()->json(['data' => $sayur]);
}
}
