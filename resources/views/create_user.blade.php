
@extends('layouts.app')


@section('content')
<div>
    <form action="{{ route('user.store') }}" method ="POST">
        @csrf
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama"><br>
    

        <label for="npm">NPM : </label>
        <input type="npm" id="npm" name="npm"><br>

        <label for="kelas">Kelas : </label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value ="{{ $kelasItem->id}}">{{  $kelasItem->nama_kelas}}</option>
            @endforeach
        </select>

   
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    
    </form>
    
</div>
@endsection