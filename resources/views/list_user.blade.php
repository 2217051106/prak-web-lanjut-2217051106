@extends('layouts.app') 
 
@section ('content') 
<div class="container mt-5">
    <h1>Daftar Pengguna</h1><br>
    
    <table class="table table-bordered"> 
        <thead> 
            <tr>
                <th>ID</th>
                <th>Nama</th> 
                <th>NPM</th> 
                <th>Kelas</th> 
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
                    <a href="#" class="btn btn-warning">View</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    </td> 
                </tr> 
            <?php 
         } 
      ?> 
   </tbody> 
</table> 
@endsection
