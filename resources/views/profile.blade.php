<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <title>Halaman Profile</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="relative bg-white shadow-md rounded-lg p-6 w-96 pt-16">
       
        <!-- Bagian Gambar Profil -->
        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
            <div class="w-32 h-32 rounded-full overflow-hidden">
                <img src="{{ asset('assets/img/profile.png') }}" alt="Foto Profil" class="w-full h-full object-cover">
        
            </div>
        </div>

        <div class="space-y-4 mt-12">
            <div class="bg-gray-200 text-center py-2 rounded-lg">
                <h2 class="text-lg font-semibold">{{$nama}}</h2>
            </div>
        <div class="bg-gray-200 text-center py-2 rounded-lg">
                <h2 class="text-lg font-semibold">{{$kelas}}</h2>
        </div>
        <div class="bg-gray-200 text-center py-2 rounded-lg">
            <h2 class="text-lg font-semibold">{{$npm}}</h2>
        </div>
    </div>
</div>
    <!-- <h1>Ini Halaman Profile</h1>
    <h2>Nama : {{$nama}}</h2>
    <h2>Kelas : {{$kelas}}</h2>
    <h2>NPM : {{$npm}}</h2> -->
</body>
</html>