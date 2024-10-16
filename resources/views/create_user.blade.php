
@extends('layouts.app')

@section('content')
<div class="mb-3 mt-5 m-5">
        <a href="{{ route('user.list') }}" class="btn btn-success">List User</a>
</div>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-center">
            <h4>Input Biodata</h4>
        </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method ="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    </div>
                    <br>
                    <br>
                            
                    <div class="row mb-3">
                        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                        <div class="col-sm-10">
                            <input type="npm" id="npm" name="npm" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <br>
                    

                    <div class="row mb-3">
                        <label for="kelas" class="col-sm-2 col-form-label">Kelas </label>
                        <div class="col-sm-10">
                            <select name="kelas_id" id="kelas_id" class="form-control" required><br>
                            <option value="">Pilih Kelas</option>
                                @foreach ($kelas as $kelasItem)
                                <option value ="{{ $kelasItem->id}}">{{  $kelasItem->nama_kelas}}</option>
                                @endforeach
                            </select>                            
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row mb-3">
                        <label for="foto" class="col-sm-2 col-form-label">Foto </label>
                        <div class="col-sm-10">
                            <input type="file" id="foto" name="foto" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary  btn-block mb-3">Submit</button>
                    </div>
    
                </form>        
            </div>
    </div>
    
</div>
@endsection