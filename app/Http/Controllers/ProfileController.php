<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => '',
            'kelas' => '',
            'npm' => ''
        ];

        return view('profile', $data);
    }
}
