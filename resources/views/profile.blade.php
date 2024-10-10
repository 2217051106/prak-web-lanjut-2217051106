<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <title>Halaman Profile</title>
</head>
<!-- <body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="relative bg-white shadow-md rounded-lg p-6 w-96 pt-16"> -->
       
        <!-- Bagian Gambar Profil -->
        <!-- <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('assets/img/profile.png') }}" alt="Foto Profil" class="w-full h-full object-cover">
        
            </div>
        </div>

        <div class="space-y-4 mt-12">
            <div class="bg-gray-200 text-center py-2 rounded-lg">
                <h2 class="text-lg font-semibold">{{$nama}}</h2>
        
            </div>
       
        <div class="bg-gray-200 text-center py-2 rounded-lg">
            <h2 class="text-lg font-semibold">{{$npm}}</h2>
            
        </div>

        <div class="bg-gray-200 text-center py-2 rounded-lg">
            <h2 class="text-lg font-semibold">{{$nama_kelas}}</h2>
           
        </div>
        
    </div>
</div> -->
    <!-- <h1>Profile User</h1>
    <p>Nama : {{$nama}}</p>
    <p>NPM : {{$npm}}</p>
    <p>Kelas : {{$nama_kelas ?? 'Kelas tidak ditemukan'}}</p> -->
    

<body class="bg-gray-100">

    <!-- Kontainer untuk seluruh halaman -->
    <div class="container mx-auto mt-4 p-4">
        <h1 class="text-3xl font-bold mb-6">Data Mahasiswa</h1>
        
        <!-- Tabel Profile Mahasiswa -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                <thead>
                    <tr>
                        <th class="py-3 px-6 bg-gray-200 text-left text-gray-700 font-semibold">No</th>
                        <th class="py-3 px-6 bg-gray-200 text-left text-gray-700 font-semibold">Profile</th>
                        <th class="py-3 px-6 bg-gray-200 text-left text-gray-700 font-semibold">Nama</th>
                        <th class="py-3 px-6 bg-gray-200 text-left text-gray-700 font-semibold">NPM</th>
                        <th class="py-3 px-6 bg-gray-200 text-left text-gray-700 font-semibold">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-300">
                        <!-- Kolom No -->
                        <td class="py-4 px-6">1</td>
                        
                        <!-- Kolom Profile (gambar) -->
                        <td class="py-4 px-6">
                            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-gray-300">
                                <img src="{{ asset('assets/img/profile.png') }}" alt="Foto Profil" class="w-full h-full object-cover">
                            </div>
                        </td>
                        
                        <!-- Kolom Nama -->
                        <td class="py-4 px-6">{{ $nama }}</td>
                        
                        <!-- Kolom NPM -->
                        <td class="py-4 px-6">{{ $npm }}</td>
                        
                        <!-- Kolom Kelas -->
                        <td class="py-4 px-6">{{ $nama_kelas }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>


</body>
</html>