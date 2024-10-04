<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel; 


class UserController extends Controller{

    public $userModel;
    public $kelasModel;

    public function __construct()
{
    $this->userModel = new UserModel();
    $this->kelasModel = new Kelas();


}
    public function index() 
    {  $users = $this->userModel->getUser();

        $data = [ 
            'title' => 'List User',
            'users' => $users,  

        ]; 
    
        return view('list_user', $data); 
    }

    public function store(Request $request) 
    { 

        $this->userModel->create([ 

            'nama' => $request->input('nama'), 
            'npm' => $request->input('npm'), 
            'kelas_id' => $request->input('kelas_id'), 
        ]); 

        $this->userModel->saveUser($validatedData);
        
        return redirect()->route('/user'); 
    }

    public function create(){
        // $kelasModel = new Kelas();

        // $kelas = $kelasModel->getKelas();

        $kelas = $this->kelasModel->getKelas();

        $data =[
            'title' => 'Create User',
            'kelas' =>$kelas,
        ];

        return view('create_user', $data);
        

    }
    

    // public function store(Request $request){

    //    $validatedData = $request->validate([
    //     'nama' => 'required|string|max:255',
    //     'npm' =>'required|string|max:255',
    //     'kelas_id' => 'required|exists:kelas,id'
        
    //    ]);

    // //    $user = UserModel::create($validatedData);


    //    $user->load('kelas');

    
    //     return view('profile', [
    //         'nama' => $user->nama,
    //         'npm' => $user->npm,
    //         'nama_kelas' =>$user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
    //     ]);
    // }

}
