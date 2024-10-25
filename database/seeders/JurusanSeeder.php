<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Jurusan;
use App\Models\Fakultas;  

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = Fakultas::where('nama_fakultas', 'Mipa')->first();
        // $fakultasMIPA = Fakultas::where('nama_fakultas', 'MIPA')->first();
        $data = [
            'FISIKA',
            'KIMIA',
            'BIOLOGI',
            'MATEMATIKA', 
            'ILMU KOMPUTER',
        ];
        foreach ($data as $jurusan){
            Jurusan::create([
                'nama_jurusan' => $jurusan,
                'fakultas_id' => $fakultas->id,
            
            ]
            );
        }
        
    }
}
