<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $usr = User::all();
        return response()->json(['data' => $usr]);
    }

    public function show(Request $request){
        $user = User::where('nama', $request->nama)->first();
        if($user){
            if($request->password == $user->password){
                return response()->json([
                    'success' => true,
                    'message' => 'Login Berhasil',
                    'data'  => $user
                ], 400);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Password Salah',
                    'data'  => ''
                ], 400);
            }
        }
    }

    public function postdata(Request $request){
        $request->validate([
            'nama'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string',
            'jenis_kelamin'=>'required|string',
        ]);

        $usr = new User;
        $usr->nama = $request->input('nama');
        $usr->email = $request->input('email');
        $usr->password = $request->input('password');
        $usr->jenis_kelamin = $request->input('jenis_kelamin');
        $usr->save();

        return response()->json(['message' => 'User berhasil ditambahkan'], 201);
    }
}
