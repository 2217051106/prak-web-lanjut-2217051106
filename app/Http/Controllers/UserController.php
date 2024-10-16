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


    public function create(){
        $kelasModel = new Kelas();

        $kelas = $kelasModel->getKelas();

        $kelas = $this->kelasModel->getKelas();

        $data =[
            'title' => 'Create User',
            'kelas' =>$kelas,
        ];

        return view('create_user', $data);
        

    }

    
    public function store(Request $request) 
    { 
       
         // Validasi Input
         $request->validate([

            'nama' => 'required|string|max:255',
            'npm' =>'required|string|max:255',
            'kelas_id' => 'required|integer',
            // 'foto' => 'nullable | image | mimes:jpeg, png, jpg, gif, svg|max:2028',  // Validasi untuk foto
            'foto' => 'image|file|max:2048',
        ]); 

        // Menghandle upload foto
        if ($request->hasFile('foto')){
            $foto = $request->file('foto');
            // Menyimpan file foto di folder 'uploads'
            $foto_name =  $foto->hashName();
            $fotoPath = $foto->move(('uploads'), $foto_name);
          
        } else {
            // Jika tidak ada file yang di upload, set fotoPath menjadi null atau default
            $fotoPath = null;

        }
        // Menyimpan data ke database termasuk path foto
        $this->userModel->create([
            'nama' => $request->input('nama'), 
            'npm' => $request->input('npm'), 
            'kelas_id' => $request->input('kelas_id'), 
            'foto' => $fotoPath,  // Menyimpan path foto

        ]);

        // $this->userModel->saveUser($validatedData);
        
        return redirect()->to('/user')->with('success', 'User berhasil ditambahkan'); 
    }
    

//     public function store(Request $request){

//        $validatedData = $request->validate([
//         'nama' => 'required|string|max:255',
//         'npm' =>'required|string|max:255',
//         'kelas_id' => 'required|exists:kelas,id'
        
//        ]);

//        $user = UserModel::create($validatedData);


//        $user->load('kelas');

    
//         return view('profile', [
//             'nama' => $user->nama,
//             'npm' => $user->npm,
//             'nama_kelas' =>$user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
//         ]);
//     }

}
