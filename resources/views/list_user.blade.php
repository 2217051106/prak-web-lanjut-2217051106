@extends('layouts.app') 
 
@section ('content') 
<div class="container mt-5">
    <h1>Daftar Pengguna</h1><br>
    
    <table class="table table-bordered"> 
        <thead> 
        <a href="{{ route('user.create') }}" class="btn
        btn-primary mb-3">Tambah User</a>
            <tr>
                <th>ID</th>
                <th>Nama</th> 
                <th>NPM</th> 
                <th>Kelas</th> 
                <th>Foto</th>
                <th>Aksi</th> 
            </tr> 
        </thead> 
        <tbody> 
            <?php 
            foreach ($users as $user) { 
            ?> 
                <tr> 
                    <td><?= $user['id'] ?></td> 
                    <td><?= $user['nama'] ?></td> 
                    <td><?= $user['npm'] ?></td> 
                    <td><?= $user['nama_kelas'] ?></td> 
                    <td>
                        @if($user['foto'])
                            <img src="{{ asset($user['foto']) }}" alt="User Photo" width="100" >
                        @endif
    
                    </td>

                    <td>
                    <!-- View -->
                    <a href="" class="btn btn-warning">View</a>

                     <!-- Edit -->
                    <a href="" class="btn btn-primary">Edit</a>

                     <!-- Delete -->
                    <form action="" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                     </form>
                        <!-- <a href="" class="btn btn-danger">Delete</a> -->
                    </td> 
                </tr> 
    
            <?php 
             } 
             ?> 
        </tbody> 
    </table> 
</div>
@endsection
