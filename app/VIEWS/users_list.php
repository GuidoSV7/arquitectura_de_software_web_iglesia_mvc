<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title ?></title>
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
      <h2 class="text-3xl">CRUD DE USERS</h2>
      <!-- User List -->
      <table class="w-full border border-gray-400 mt-2">
        <thead>
          <tr>
            <th class="border border-gray-400 p-2">Name</th>
            <th class="border border-gray-400 p-2">Email</th>
            <th class="border border-gray-400 p-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-400 p-2">John Doe</td>
            <td class="border border-gray-400 p-2">johndoe@example.com</td>
            <td class="border border-gray-400 p-2">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2">Show</button>
              <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2">Edit</button>
              <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mr-2">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
     
    </div>
  </div>
</div>

</body>
</html>