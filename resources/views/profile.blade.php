<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Profile</title>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="relative bg-white shadow-md rounded-lg p-6 w-96 pt-16 text-center text-sm font-bold font-serif">

            <!-- Bagian Gambar Profil -->
            <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                <div class="w-32 h-32 rounded-full overflow-hidden">
                @if($user['foto'])
                    <img src="{{ asset($user['foto']) }}" alt="User Photo" width="full" class="rounded-full" >
                @endif
                </div>
            </div>

            <div class="space-y-4 mt-12">
                <div class="bg-gray-200 text-center py-2 rounded-lg">
                    <p> Nama: {{ $user->nama }}</p>
            
                </div>
        
                <div class="bg-gray-200 text-center py-2 rounded-lg">
                    <p>NPM: {{ $user->npm }}</p>    
                
                </div>

                <div class="bg-gray-200 text-center py-2 rounded-lg">
                    <p>Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan'}}</p>
                </div>
            </div>
    </div>
</body>
</html>

