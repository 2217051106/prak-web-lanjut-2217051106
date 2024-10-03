<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel; 


class UserController extends Controller{
    public function create(){
        return view('create_user', [
            'kelas' => Kelas::all(),
        ]);
    }
    // public function store(Request $request){
    //     // dd($request->all());
    //     $kelas = Kelas::find($request->kelas_id);
    //     $data = [
    //         'nama' => $request->nama,
    //         'npm' => $request->npm,
    //         // 'kelas' => $request->kelas
    //         'kelas' => $kelas ? $kelas->nama_kelas : null
    //     ];

    //     return view('profile', $data);
    // }

    public function store(Request $request){

       $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'npm' =>'required|string|max:255',
        'kelas_id' => 'required|exists:kelas,id'
        
       ]);

       $user = UserModel::create($validatedData);

       $user->load('kelas');

    
        return view('profile', [
            'nama' => $user->nama,
            'npm' => $user->npm,
            'nama_kelas' =>$user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
        ]);
    }

}
