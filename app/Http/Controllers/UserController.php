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

    public function profile($nama = "", $npm = "", $kelas = "")
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];
        return view('profile', $data);

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
            'foto' => 'image|file|max:2048', // validasi untuk foto
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
    // method untuk update
    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';

        return view('edit_user', compact('user', 'kelas', 'title'));
    }

        // Fungsi update
    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);

        $user-> nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        if ($request->hasFile('foto')){
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
            $user->foto = 'uploads/' . $fileName;
        }
        $user->save();

        return redirect()->route('user.list')->with('success', 'User update successfully');

    }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'User has been deleted successfully');
    }
    
    public function show($id){
        $user = UserModel::findOrFail($id);
        $kelas = Kelas::find($user->kelas_id);

        $title = 'Detail' .$user->name;

        return view('profile', compact('user', 'kelas', 'title'));

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
