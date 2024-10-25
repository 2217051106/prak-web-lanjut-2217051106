<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    // protected $table = 'jurusan'; // Jika nama tabel tidak sesuai dengan konvensi
    
    // protected $fillable = ['nama_jurusan', 'fakultas_id']; // Sesuaikan dengan kolom di tabel

    // protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(UserModel::class, 'jurusan_id');
        
    }

    protected $table = 'jurusan';

    public function getJurusan(){
        return $this->all();
    }

    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }
    

}
