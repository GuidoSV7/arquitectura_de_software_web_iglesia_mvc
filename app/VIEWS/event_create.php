<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    
<div class="flex flex-col h-screen">
  <!-- Header -->
  <?php include '../app/Components/Header.php'?>
  
  <!-- Main Content -->
  <div class="flex flex-grow">
    <!-- Sidebar -->
    <?php include '../app/Components/Sidebar.php'?>
    <!-- Content -->
    <div class="flex-grow p-4">

                <!-- Create Evento Form -->
        <form class="mb-4"  method="POST" enctype="multipart/form-data">
            <label class="block mb-2" for="name">Nombre</label>
            <input type="text" name="name" class="w-full border border-gray-400 p-2 mb-2">

            <label class="block mb-2" for="description">Descripcion</label>
            <input type="text" name="description" class="w-full border border-gray-400 p-2 mb-2">

            <!-- <label class="block mb-2" for="image">Imagen</label>
            <input type="file" name="image" class="w-full border border-gray-400 p-2 mb-2"> -->

            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">Crear Evento</button>
        </form>


    
      
      
     
    </div>
  </div>
</div>

</body>
</html>