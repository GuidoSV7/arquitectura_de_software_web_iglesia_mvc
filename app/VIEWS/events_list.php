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

        <h2 class="text-3xl">CRUD DE EVENTS</h2>
        <div class="flex flex-col mt-4">
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div class="flex flex-col">
                        <a href="events/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Crear
                        </a>
                    </div>
                </div>
            </div>
                 <!-- event List -->
      <div class="bg-slate-300 overflow-hidden shadow-sm my-5">
          <?php if (is_null($events)): ?>
              <p class="p-4 text-center">No hay events con esos datos.</p>
          <?php else: ?>
              <table class="w-full border border-gray-400">
                  <thead>
                      <tr>
                          <th class="border border-gray-400 p-2">ID</th>
                          <th class="border border-gray-400 p-2">Name</th>
                          <th class="border border-gray-400 p-2">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($events as $event): ?>
                          <tr>
                              <td class="border border-gray-400 p-2"><?php echo $event['id']; ?></td>
                              <td class="border border-gray-400 p-2"><?php echo $event['name']; ?></td>
                              <td class="border border-gray-400 p-2 text-center">
                                  <a href="events/<?php echo $event['id']; ?>/show" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Show</a>
                                  <a href="events/<?php echo $event['id']; ?>/edit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2">Edit</a>
                                  <a href="events/<?php echo $event['id']; ?>/delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</a>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>

              </table>
          <?php endif; ?>
      </div>

  </div>
</div>

</body>
</html>