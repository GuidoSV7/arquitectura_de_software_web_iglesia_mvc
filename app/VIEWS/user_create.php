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
      <form class="mb-4">
        <label class="block mb-2" for="name">Name</label>
        <input type="text" id="name" class="w-full border border-gray-400 p-2 mb-2" required="">
        <label class="block mb-2" for="email">Email</label>
        <input type="email" id="email" class="w-full border border-gray-400 p-2 mb-2" required="">
        <label class="block mb-2" for="password">Password</label>
        <input type="password" id="password" class="w-full border border-gray-400 p-2 mb-2" required="">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create User</button>
      </form>
     
    </div>
  </div>
</div>

</body>
</html>