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
      
      <!-- component -->
      <div style="background-color : #f4f4f0" class=" sm:mx-16 lg:mx-16 xl:mx-72 ">
          <div class="flex justify-between container mx-auto">
            <div class="w-full">
              <div class="mt-4 px-4">
                <h1 class="text-3xl font-semibold py-7 px-5">Detalles de Usuario</h1>

               

                <form class="mx-5 my-5" action="#" method="POST">

                  <label class="relative block p-3 border-2 border-black rounded">
                    <span class="text-md font-semibold text-zinc-900" >
                      Nombre
                    </span>
                    <input class="w-full bg-transparent p-0 text-sm  text-gray-500 focus:outline-none" name="name" type="text" placeholder="<?= $user['name']; ?>" value="<?= $user['name']; ?>" />
                  </label>




                  <label class="relative block p-3 border-2 mt-5 border-black rounded" >
                    <span class="text-md font-semibold text-zinc-900" >
                      Número de Teléfono
                    </span>

                    <input class="w-full   p-0 text-sm border-none bg-transparent text-gray-500 focus:outline-none" name="phone_number" type="text" placeholder="<?= $user['phone_number']; ?>" value="<?= $user['phone_number']; ?>" />
                  </label>


                  <label class="relative block p-3 border-2 mt-5 border-black rounded" >
                    <span class="text-md font-semibold text-zinc-900" >
                      Rol
                    </span>

                    <input class="w-full   p-0 text-sm border-none bg-transparent text-gray-500 focus:outline-none" name="id_rol" type="text" value="<?= $user['id_rol']; ?>"placeholder="<?= $rol ?>"  />
                  </label>

                  <!-- Botón Actualizar centrado -->
                  <div class="text-center mt-5">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >Actualizar</button>
                  </div>



              </div>



              </form>
            </div>
          </div>
     
    </div>
  </div>
</div>

</body>
</html>