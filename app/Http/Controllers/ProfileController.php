<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => 'Yunia Saputri',
            'kelas' => 'B',
            'npm' => '2217051106'
        ];

        return view('profile', $data);
    }
}
