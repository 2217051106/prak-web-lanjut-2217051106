<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">

<h1 class="text-3xl font-bold mb-4 text-center">Input Biodata</h1><br>
<form action="{{route('user.store') }}" method="post">
    @csrf
    <div class="mb-4">
        <label for="nama"  class="block text-sm text-lg font-medium text-gray-700">Nama :</label>
        <input type="text" id="nama" name="nama" value="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        @foreach($errors->get('nama') as $msg)
            <p class="text-red-500">{{$msg}}</p>
        @endforeach
    </div>
  
    <div class="mb-4">
        <label for="npm" class="block text-sm text-lg font-medium text-gray-700">Npm :</label>
        <input type="text" id="npm" name="npm" value="" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        @foreach($errors->get('npm') as $msg)
            <p class="text-red-500">{{$msg}}</p>
        @endforeach
  </div>

  <div class="mb-4">
    <label for="id_kelas" class="block text-sm text-lg font-medium text-gray-700 ">Kelas :</label>
  <!-- <input type="text" id="kelas" name="kelas" value="A"  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"><br><br> -->
   <select name ="kelas_id" id ="kelas_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
    @foreach ($kelas as $kelasItem)
    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
    @endforeach
   </select>
  </div>

  <div class="text-center">
  <input type="submit" value="Submit" class="font-bold bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
  </div>

</form>
    
</body>
</html>