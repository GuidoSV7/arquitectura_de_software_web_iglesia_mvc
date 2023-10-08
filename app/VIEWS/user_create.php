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
            <!-- Create User Form -->
      <form class="mb-4" action="#" method="POST">
        <label class="block mb-2" for="name">Nombre</label>
        <input type="text" name="name" class="w-full border border-gray-400 p-2 mb-2" >
        <label class="block mb-2" for="phone_number">Numero de teléfono</label>
        <input type="numer" name="phone_number" class="w-full border border-gray-400 p-2 mb-2" >
        <label class="block mb-2" for="password">Contraseña</label>
        <input type="password" name="password" class="w-full border border-gray-400 p-2 mb-2" >

        <label class="block mb-2" for="role">Rol</label>
        <select name="role" class="w-full border border-gray-400 p-2 mb-2">
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role['id']; ?>"><?= $role['name']; ?></option>
            <?php endforeach; ?>
        </select>

        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Crear Usuario</button>
      </form>

        </div>
    </div>
  </div>
</div>

</body>
</html>